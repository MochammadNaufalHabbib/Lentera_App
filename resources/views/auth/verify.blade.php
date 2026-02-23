<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - Lentera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <!-- Logo/Title -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-indigo-600">Lentera</h1>
                <p class="text-gray-500 mt-2">Verifikasi Email</p>
            </div>

            <!-- Step Indicator -->
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold">✓</div>
                    <div class="w-16 h-1 bg-green-500"></div>
                    <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold">✓</div>
                    <div class="w-16 h-1 bg-green-500"></div>
                    <div class="w-8 h-8 bg-indigo-600 text-white rounded-full flex items-center justify-center text-sm font-bold">3</div>
                </div>
            </div>

            <p class="text-gray-600 text-center mb-6">Masukkan kode OTP yang dikirim ke email Anda</p>

            <!-- Error/Success Messages -->
            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('register.verify') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="otp">
                        Kode OTP
                    </label>
                    <input 
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition text-center text-2xl tracking-widest"
                        id="otp"
                        type="text"
                        name="otp"
                        maxlength="6"
                        placeholder="000000"
                        required
                    >
                    @error('otp')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button 
                    type="submit"
                    class="w-full bg-indigo-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-indigo-700 transition duration-300"
                >
                    Simpan & Verifikasi
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-500 text-sm">
                    Tidak menerima kode OTP? 
                    <a href="#" class="text-indigo-600 font-semibold hover:text-indigo-800">
                        Kirim ulang
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
