<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Tampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        // Cek apakah user sudah verifikasi email
        if ($user && !$user->is_verified) {
            return back()->with('error', 'Email belum diverifikasi. Silakan verifikasi email terlebih dahulu.')->withInput();
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Email atau password salah.')->withInput();
    }

    // Tampilkan halaman registrasi step 1 (Pendidikan)
    public function showRegisterFormStep1()
    {
        return view('auth.register-step1');
    }

    // Proses registrasi step 1 -> Simpan ke session & lanjut ke step 2
    public function registerStep1(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'education' => 'required|in:SMA,SMK',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Simpan ke session
        $request->session()->put('register_education', $request->education);

        return redirect()->route('register.step2');
    }

    // Tampilkan halaman registrasi step 2 (Data diri)
    public function showRegisterFormStep2(Request $request)
    {
        if (!$request->session()->has('register_education')) {
            return redirect()->route('register.step1');
        }

        return view('auth.register-step2');
    }

    // Proses registrasi step 2 -> Simpan user & langsung login
    public function registerStep2(Request $request)
    {
        if (!$request->session()->has('register_education')) {
            return redirect()->route('register');
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'age' => 'required|integer|min:1|max:150',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Simpan user ke database (tanpa OTP)
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'education' => $request->session()->get('register_education'),
            'gender' => $request->gender,
            'age' => $request->age,
            'is_verified' => true,
            'email_verified_at' => now(),
        ]);

        // Hapus session education
        $request->session()->forget('register_education');

        // Login user langsung
        Auth::login($user);

        return redirect('/dashboard')->with('success', 'Registrasi berhasil! Selamat datang.');
    }

    // Tampilkan halaman lupa password
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Proses lupa password - kirim OTP
    public function sendResetOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        // Generate OTP
        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        $otpExpires = now()->addMinutes(30);

        $user->update([
            'otp_code' => $otp,
            'otp_expires_at' => $otpExpires,
        ]);

        // Log OTP (simulasi)
        \Log::info("OTP Reset Password untuk {$user->email}: {$otp}");

        $request->session()->put('reset_email', $user->email);

        return redirect()->route('password.reset.form')->with('success', 'Kode OTP telah dikirim ke email Anda.');
    }

    // Tampilkan form reset password
    public function showResetPasswordForm(Request $request)
    {
        if (!$request->session()->has('reset_email')) {
            return redirect()->route('password.forgot');
        }

        return view('auth.reset-password');
    }

    // Proses reset password
    public function resetPassword(Request $request)
    {
        if (!$request->session()->has('reset_email')) {
            return redirect()->route('password.forgot');
        }

        $validator = Validator::make($request->all(), [
            'otp' => 'required|digits:6',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $email = $request->session()->get('reset_email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return back()->with('error', 'User tidak ditemukan.');
        }

        if ($user->otp_code !== $request->otp) {
            return back()->with('error', 'Kode OTP salah.');
        }

        if (now()->greaterThan($user->otp_expires_at)) {
            return back()->with('error', 'Kode OTP sudah expired.');
        }

        // Update password
        $user->update([
            'password' => Hash::make($request->password),
            'otp_code' => null,
            'otp_expires_at' => null,
        ]);

        $request->session()->forget('reset_email');

        return redirect()->route('login')->with('success', 'Password berhasil direset. Silakan login dengan password baru.');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
