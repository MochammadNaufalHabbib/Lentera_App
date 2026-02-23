<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lentera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .pattern-bg {
            background-color: #f8fafc;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%234f46e5' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="pattern-bg min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo & Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl shadow-lg mb-4">
                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-gray-800">Lentera</h1>
            <p class="text-gray-500 mt-1">Tes Minat Bakat & Kepribadian</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">Masuk ke Akun</h2>

            <!-- Error Message -->
            @if(session('error'))
                <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-lg mb-4 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="mb-5">
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">
                        Email
                    </label>
                    <input 
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-indigo-500 focus:ring-3 focus:ring-indigo-100 outline-none transition-all"
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nama@email.com"
                        required
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="password">
                        Password
                    </label>
                    <input 
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-indigo-500 focus:ring-3 focus:ring-indigo-100 outline-none transition-all"
                        id="password"
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        required
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                    </label>
                    <a href="{{ route('password.forgot') }}" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">
                        Lupa password?
                    </a>
                </div>

                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold py-3 px-4 rounded-xl hover:from-indigo-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                >
                    Masuk
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Belum punya akun? 
                    <a href="{{ route('register.step1') }}" class="text-indigo-600 font-semibold hover:text-indigo-800">
                        Daftar sekarang
                    </a>
                </p>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700 text-sm flex items-center justify-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke halaman utama
            </a>
        </div>
    </div>
</body>
</html>
