@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-500 via-emerald-500 to-teal-500 rounded-3xl shadow-2xl p-8 md:p-12 mb-8">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-white opacity-10 rounded-full"></div>
        
        <div class="relative z-10 text-center text-white">
            <div class="mb-6">
                <svg class="w-24 h-24 mx-auto animate-bounce-slow" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="100" cy="100" r="80" fill="rgba(255,255,255,0.2)"/>
                    <path d="M100 40 L115 80 L155 80 L122 105 L137 145 L100 120 L63 145 L78 105 L45 80 L85 80 Z" fill="white"/>
                </svg>
            </div>
            
            <h1 class="text-3xl md:text-4xl font-bold mb-4 animate-fade-in">Tes Minat & Bakat RIASEC</h1>
            <p class="text-green-100 text-lg md:text-xl max-w-2xl mx-auto">Temukan karir yang sesuai dengan passion dan kemampuan Anda</p>
            
            <div class="flex justify-center gap-4 mt-6 flex-wrap">
                <span class="px-4 py-2 bg-white/20 rounded-full text-sm font-medium">✨ 30 Pertanyaan</span>
                <span class="px-4 py-2 bg-white/20 rounded-full text-sm font-medium">⏱️ ±10 Menit</span>
            </div>
        </div>
    </div>

    <!-- Content Card -->
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">
            <span class="text-green-600">Apa itu</span> Tes RIASEC?
        </h2>
        
        <div class="mb-8">
            <p class="text-gray-600 mb-4 leading-relaxed">
                <strong>Teori RIASEC</strong> (dikembangkan oleh John Holland) mengklasifikasikan minat dan kepribadian ke dalam 6 tipe utama:
            </p>
            
            <!-- RIASEC Types -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-red-50 rounded-xl p-4 text-center border border-red-100">
                    <span class="text-2xl">🔧</span>
                    <p class="font-bold text-red-700">R - Realistic</p>
                    <p class="text-xs text-red-600">Teknis & Praktis</p>
                </div>
                <div class="bg-blue-50 rounded-xl p-4 text-center border border-blue-100">
                    <span class="text-2xl">🔬</span>
                    <p class="font-bold text-blue-700">I - Investigative</p>
                    <p class="text-xs text-blue-600">Ilmiah & Analitis</p>
                </div>
                <div class="bg-purple-50 rounded-xl p-4 text-center border border-purple-100">
                    <span class="text-2xl">🎨</span>
                    <p class="font-bold text-purple-700">A - Artistic</p>
                    <p class="text-xs text-purple-600">Kreatif & Artistik</p>
                </div>
                <div class="bg-yellow-50 rounded-xl p-4 text-center border border-yellow-100">
                    <span class="text-2xl">💬</span>
                    <p class="font-bold text-yellow-700">S - Social</p>
                    <p class="text-xs text-yellow-600">Sosial & Helpers</p>
                </div>
                <div class="bg-orange-50 rounded-xl p-4 text-center border border-orange-100">
                    <span class="text-2xl">💼</span>
                    <p class="font-bold text-orange-700">E - Enterprising</p>
                    <p class="text-xs text-orange-600">Bisnis & Leadership</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-100">
                    <span class="text-2xl">📊</span>
                    <p class="font-bold text-gray-700">C - Conventional</p>
                    <p class="text-xs text-gray-600">Terstruktur & Admin</p>
                </div>
            </div>
        </div>

        <!-- Info Box -->
        <div class="bg-gradient-to-r from-amber-50 to-yellow-50 border-l-4 border-amber-400 rounded-xl p-6 mb-8">
            <div class="flex items-start gap-3">
                <span class="text-2xl">💡</span>
                <div>
                    <p class="font-semibold text-amber-800 mb-1">Tips Pengerjaan:</p>
                    <p class="text-amber-700 text-sm">Jawablah dengan jujur sesuai perasaan dan pikiran Anda yang sebenarnya. Tidak ada jawaban yang salah!</p>
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center">
            <a href="{{ route('test.start') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white font-bold py-4 px-10 rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl group">
                <span class="text-lg">Mulai Tes Sekarang</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
            <p class="mt-4 text-gray-500 text-sm">Tidak ada batasan waktu • Gratis • Instan</p>
        </div>
    </div>
    
    <!-- Benefits Section -->
    <div class="max-w-2xl mx-auto mt-8 grid md:grid-cols-2 gap-4">
        <div class="bg-white rounded-xl shadow-md p-6 flex items-center gap-4 hover:shadow-lg transition-shadow">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-xl">✅</span>
            </div>
            <div>
                <h4 class="font-bold text-gray-800">Hasil Akurat</h4>
                <p class="text-sm text-gray-600">Berdasarkan teori Holland</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6 flex items-center gap-4 hover:shadow-lg transition-shadow">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-xl">🎯</span>
            </div>
            <div>
                <h4 class="font-bold text-gray-800">Rekomendasi Karir</h4>
                <p class="text-sm text-gray-600">Dapat rekomendasi pekerjaan</p>
            </div>
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
