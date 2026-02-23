<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==================== AUTH ROUTES ====================

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register - Step 1 (Education)
Route::get('/register', [AuthController::class, 'showRegisterFormStep1'])->name('register');
Route::post('/register', [AuthController::class, 'registerStep1'])->name('register.step1');
Route::post('/register/step1', [AuthController::class, 'registerStep1'])->name('register.step1.post');

// Register - Step 2 (Data diri)
Route::get('/register/step2', [AuthController::class, 'showRegisterFormStep2'])->name('register.step2');
Route::post('/register/step2', [AuthController::class, 'registerStep2']);

// Forgot Password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.forgot');
Route::post('/forgot-password', [AuthController::class, 'sendResetOtp']);

// Reset Password
Route::get('/reset-password', [AuthController::class, 'showResetPasswordForm'])->name('password.reset.form');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.reset');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ==================== MAIN ROUTES ====================

// Landing page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard (requires auth)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Start page
Route::get('/start', function () {
    return view('start');
})->name('start');

// Profile (requires auth)
Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');


// ==================== TEST ROUTES ====================

// Test Interest (minat bakat) - requires auth
Route::get('/test-interest', [TestController::class, 'index'])->middleware(['auth'])->name('test.interest');

// Test Kepribadian - requires auth
Route::get('/test-kepribadian', [TestController::class, 'kepribadian'])->middleware(['auth'])->name('test.kepribadian');

// Test RIASEC - Start
Route::get('/test/start', [TestController::class, 'start'])->middleware(['auth'])->name('test.start');
Route::get('/test/interest/start', [TestController::class, 'start'])->middleware(['auth'])->name('test.interest.start');

// Test pages (multi-page format)
Route::get('/test/interest/{page}', [TestController::class, 'page'])->middleware(['auth'])->name('test.interest.page');

// Handle answers submission (pages 1-5)
Route::post('/test/submit', [TestController::class, 'next'])->middleware(['auth'])->name('test.submit');

// Finish test and get results (page 6)
Route::post('/test/finish', [TestController::class, 'finish'])->middleware(['auth'])->name('test.finish');

// Result page
Route::get('/test/result/{id}', [TestController::class, 'result'])->middleware(['auth'])->name('test.interest.result');

// History - requires auth
Route::get('/history', [TestController::class, 'history'])->middleware(['auth'])->name('history');

// ==================== PERSONAL WEBSITE ROUTES ====================

// Personal Website - Public
Route::get('/personal', [App\Http\Controllers\PersonalWebsiteController::class, 'index'])->name('personal');
