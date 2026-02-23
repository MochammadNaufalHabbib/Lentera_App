@extends('layouts.app')

@section('page_title', 'Mulai Tes')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto text-center">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-[#667eea] via-[#764ba2] to-[#667eea] rounded-3xl shadow-2xl p-8 md:p-12 mb-8 text-white">
            <div class="mb-6">
                <svg class="w-24 h-24 mx-auto animate-bounce-slow" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="100" cy="100" r="80" fill="rgba(255,255,255,0.2)"/>
                    <path d="M100 40 L115 80 L155 80 L122 105 L137 145 L100 120 L63 145 L78 105 L45 80 L85 80 Z" fill="white"/>
                </svg>
            </div>
            
            <h1 class="text-3xl md:text-4xl font-bold mb-4 animate-fade-in">Siap Memulai?</h1>
            <p class="text-indigo-100 text-lg md:text-xl max-w-lg mx-auto">
                Temukan karir yang sesuai dengan minat dan bakat Anda
            </p>
            
            <div class="flex justify-center gap-4 mt-6 flex-wrap">
                <span class="px-4 py-2 bg-white/20 rounded-full text-sm font-medium">✨ 30 Pertanyaan</span>
                <span class="px-4 py-2 bg-white/20 rounded-full text-sm font-medium">⏱️ ±10 Menit</span>
                <span class="px-4 py-2 bg-white/20 rounded-full text-sm font-medium">🎯 Akurat</span>
            </div>
        </div>

        <!-- Info Card -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Apa yang akan Anda dapatkan?</h2>
            
            <div class="grid md:grid-cols-2 gap-4 text-left">
                <div class="flex items-start gap-3 p-4 bg-indigo-50 rounded-xl">
                    <span class="text-2xl">🎯</span>
                    <div>
                        <h4 class="font-bold text-indigo-800">Tipe Kepribadian</h4>
                        <p class="text-sm text-indigo-700">Ketahui tipe RIASEC Anda</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-4 bg-purple-50 rounded-xl">
                    <span class="text-2xl">💼</span>
                    <div>
                        <h4 class="font-bold text-purple-800">Rekomendasi Karir</h4>
                        <p class="text-sm text-purple-700">Dapat pekerjaan yang cocok</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-4 bg-pink-50 rounded-xl">
                    <span class="text-2xl">📈</span>
                    <div>
                        <h4 class="font-bold text-pink-800">Analisis Diri</h4>
                        <p class="text-sm text-pink-700">Pahami kekuatan Anda</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-4 bg-violet-50 rounded-xl">
                    <span class="text-2xl">💡</span>
                    <div>
                        <h4 class="font-bold text-violet-800">Saran Pengembangan</h4>
                        <p class="text-sm text-violet-700">Tips untuk masa depan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="space-y-4">
            @auth
                <a href="{{ route('test.start') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-bold py-4 px-10 rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <span class="text-lg">Mulai Tes Sekarang</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            @else
                <a href="{{ route('login') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-bold py-4 px-10 rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <span class="text-lg">Login untuk Mulai</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                <p class="text-gray-500 text-sm">atau <a href="{{ route('register') }}" class="text-indigo-600 font-semibold">daftar akun baru</a></p>
            @endauth
        </div>

        <!-- Note -->
        <div class="mt-8 p-4 bg-amber-50 rounded-xl border border-amber-200">
            <p class="text-amber-800 text-sm flex items-center justify-center gap-2">
                <span>💡</span>
                Jawablah dengan jujur - tidak ada jawaban salah!
            </p>
        </div>
    </div>
</div>

<style>
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fade-in 0.6s ease-out;
    }
</style>
@endsection
