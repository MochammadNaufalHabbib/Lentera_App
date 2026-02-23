<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Lentera</title>
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
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl shadow-lg mb-3">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Lentera</h1>
        </div>

        <!-- Register Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            <h2 class="text-xl font-bold text-gray-800 mb-2 text-center">Daftar Akun Baru</h2>
            <p class="text-gray-500 text-center mb-6 text-sm">Langkah 1 dari 2</p>

            <!-- Step Indicator -->
            <div class="flex items-center justify-center mb-6">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full flex items-center justify-center text-sm font-bold shadow-lg">1</div>
                    <div class="w-12 h-1 bg-gray-200"></div>
                    <div class="w-10 h-10 bg-gray-100 text-gray-400 rounded-full flex items-center justify-center text-sm font-bold">2</div>
                </div>
            </div>

            <p class="text-gray-600 text-center mb-6">Pilih jenjang pendidikan Anda</p>

            <!-- Form -->
            <form action="{{ route('register.step1') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-3">
                        Pendidikan
                    </label>
                    <div class="space-y-3">
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-indigo-300 hover:bg-indigo-50 transition-all group">
                            <input type="radio" name="education" value="SMA" class="w-5 h-5 text-indigo-600" required>
                            <span class="ml-3 text-gray-700 font-medium group-hover:text-indigo-700">SMA (Sekolah Menengah Atas)</span>
                        </label>
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-indigo-300 hover:bg-indigo-50 transition-all group">
                            <input type="radio" name="education" value="SMK" class="w-5 h-5 text-indigo-600" required>
                            <span class="ml-3 text-gray-700 font-medium group-hover:text-indigo-700">SMK (Sekolah Menengah Kejuruan)</span>
                        </label>
                    </div>
                    @error('education')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold py-3 px-4 rounded-xl hover:from-indigo-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                >
                    Lanjut ke Langkah 2
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600 text-sm">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="text-indigo-600 font-semibold hover:text-indigo-800">
                        Login
                    </a>
                </p>
            </div>
        </div>

        <!-- Back -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700 text-sm flex items-center justify-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali
            </a>
        </div>
    </div>
</body>
</html>
