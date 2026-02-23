<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentera - Tes Minat Bakat & Kepribadian</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }
        @keyframes pulse-ring {
            0% { transform: scale(0.8); opacity: 1; }
            100% { transform: scale(1.5); opacity: 0; }
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="max-w-4xl w-full">
        <!-- Main Card -->
        <div class="glass rounded-3xl p-8 md:p-12 text-center float">
            <!-- Logo/Icon -->
            <div class="mb-8 relative inline-block">
                <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto relative">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <div class="absolute inset-0 rounded-full border-2 border-white/30 pulse-ring"></div>
            </div>
            
            <!-- Title -->
            <h1 class="text-5xl md:text-6xl font-bold mb-4 text-white">
                Lentera
            </h1>
            <p class="text-xl md:text-2xl text-white/90 mb-4 font-medium">
                Tes Minat Bakat & Kepribadian
            </p>
            <p class="text-white/70 mb-10 max-w-lg mx-auto">
                Temukan potensi diri Anda dengan tes berbasis ilmiah. 
                Dapatkan rekomendasi karir yang sesuai dengan minat dan kemampuan Anda.
            </p>
            
            <!-- Features -->
            <div class="grid md:grid-cols-3 gap-4 mb-10">
                <div class="glass rounded-xl p-4">
                    <div class="text-3xl mb-2">🎯</div>
                    <p class="text-white font-medium">Akurat</p>
                    <p class="text-white/60 text-sm">Teori Holland & MBTI</p>
                </div>
                <div class="glass rounded-xl p-4">
                    <div class="text-3xl mb-2">⚡</div>
                    <p class="text-white font-medium">Cepat</p>
                    <p class="text-white/60 text-sm">Hasil Instan</p>
                </div>
                <div class="glass rounded-xl p-4">
                    <div class="text-3xl mb-2">💡</div>
                    <p class="text-white font-medium">Bermanfaaf</p>
                    <p class="text-white/60 text-sm">Rekomendasi Karir</p>
                </div>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('start') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-indigo-600 rounded-xl font-bold hover:bg-gray-100 transition transform hover:scale-105 shadow-xl">
                    <span>Mulai Tes Sekarang</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="{{ route('login') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 glass text-white rounded-xl font-bold hover:bg-white/20 transition transform hover:scale-105">
                    <span>Login</span>
                </a>
            </div>
            
            <!-- Footer -->
            <div class="mt-10 text-white/60 text-sm">
                <p>Gratis • Tanpa Batasan • Privasi Terjamin</p>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl"></div>
        <div class="absolute bottom-10 right-10 w-48 h-48 bg-purple-500/20 rounded-full blur-xl"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-pink-500/20 rounded-full blur-xl"></div>
    </div>
</body>
</html>
