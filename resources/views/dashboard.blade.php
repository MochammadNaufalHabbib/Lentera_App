@extends('layouts.app')

@section('page_title', 'Dashboard')

@section('sidebar')
    <h4>Menu Navigasi</h4>
    <div class="sidebar-item" onclick="window.location.href='{{ url('/dashboard') }}'">
        Dashboard
    </div>
    <div class="sidebar-item" onclick="window.location.href='{{ url('/test-kepribadian') }}'">
        Tes Kepribadian
    </div>
    <div class="sidebar-item" onclick="window.location.href='{{ url('/test-interest') }}'">
        Tes Minat Bakat
    </div>
    <div class="sidebar-item" onclick="window.location.href='{{ url('/history') }}'">
        History
    </div>

    <hr class="my-4">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="sidebar-item" style="width: 100%; text-align: left; border: none; background: transparent;">
            Logout
        </button>
    </form>
@endsection

@section('content')
<div class="container mx-auto">
    <!-- Welcome Section with Animation -->
    <div class="relative overflow-hidden bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-800 rounded-2xl p-8 text-white mb-8 shadow-xl">
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-10 rounded-full translate-y-1/2 -translate-x-1/2"></div>
        
        <div class="relative z-10 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold animate-fade-in">Selamat Datang, {{ auth()->user()->name }}! 👋</h1>
                <p class="mt-2 text-indigo-100">Siap mengeksplorasi potensi diri Anda hari ini?</p>
                <div class="mt-4 flex gap-3">
                    <span class="px-3 py-1 bg-white/20 rounded-full text-sm">✨ Temukan Bakat</span>
                    <span class="px-3 py-1 bg-white/20 rounded-full text-sm">🎯 Raih Impian</span>
                </div>
            </div>
            <!-- Animated Illustration -->
            <div class="hidden md:block">
                <svg class="w-32 h-32 animate-bounce-slow" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="100" cy="100" r="80" fill="rgba(255,255,255,0.2)"/>
                    <path d="M100 40 L115 80 L155 80 L122 105 L137 145 L100 120 L63 145 L78 105 L45 80 L85 80 Z" fill="white"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Test Cards with Enhanced Design -->
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Tes Kepribadian Card -->
        <div class="group bg-white rounded-2xl shadow-lg p-8 card-hover border-t-4 border-blue-500 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-500"></div>
            
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-blue-500 font-semibold text-sm">MBTI</span>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">Tes Kepribadian</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">Kenali diri Anda lebih dalam dengan tes kepribadian berbasis teori MBTI. Pahami bagaimana Anda berpikir, merasa, dan bertindak.</p>
                
                <a href="{{ url('/test-kepribadian') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <span>Mulai Tes</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Tes Minat Bakat Card -->
        <div class="group bg-white rounded-2xl shadow-lg p-8 card-hover border-t-4 border-green-500 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-green-50 rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-500"></div>
            
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <span class="text-green-500 font-semibold text-sm">RIASEC</span>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">Tes Minat & Bakat</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">Temukan karir yang sesuai dengan minat dan bakat Anda berdasarkan teori RIASEC. Dapatkan rekomendasi pekerjaan yang tepat!</p>
                
                <a href="{{ url('/test-interest') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <span>Mulai Tes</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="mt-12 grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
            <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-2xl">🎯</span>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Akurat</h3>
            <p class="text-gray-600 text-sm">Tes berbasis ilmiah dengan validitas tinggi</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
            <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-2xl">⚡</span>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Cepat</h3>
            <p class="text-gray-600 text-sm">Hasil instan dalam hitungan menit</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
            <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-2xl">💡</span>
            </div>
            <h3 class="font-bold text-gray-800 mb-2">Bermanfaaf</h3>
            <p class="text-gray-600 text-sm">Rekomendasi karir yang relevan</p>
        </div>
    </div>

    <!-- Recent History Section -->
    <div class="mt-8 bg-white rounded-xl shadow-lg p-8">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-gray-800">Riwayat Tes Terbaru</h3>
            <a href="{{ url('/history') }}" class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center gap-1">
                Lihat Semua →
            </a>
        </div>
        
        @php
        $latestTest = \App\Models\TestHistory::where('user_id', auth()->id())->latest()->first();
        @endphp
        
        @if($latestTest)
        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6 border border-indigo-100">
            <div class="flex items-start justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="px-3 py-1 bg-indigo-600 text-white text-sm font-semibold rounded-full">
                            {{ $latestTest->primary_type ?? 'N/A' }}
                        </span>
                        @if($latestTest->secondary_type)
                        <span class="px-3 py-1 bg-purple-500 text-white text-sm font-semibold rounded-full">
                            {{ $latestTest->secondary_type }}
                        </span>
                        @endif
                    </div>
                    <h4 class="text-lg font-bold text-gray-800 mb-2">Hasil Tes Minat Bakat</h4>
                    <p class="text-gray-600 text-sm mb-4">
                        Skor: R={{ $latestTest->R ?? 0 }}, I={{ $latestTest->I ?? 0 }}, A={{ $latestTest->A ?? 0 }}, 
                        S={{ $latestTest->S ?? 0 }}, E={{ $latestTest->E ?? 0 }}, C={{ $latestTest->C ?? 0 }}
                    </p>
                    <a href="{{ url('/test/result/' . $latestTest->id) }}" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-800 font-medium">
                        <span>Lihat Detail Hasil</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="text-right">
                    <p class="text-sm text-gray-500">{{ $latestTest->created_at->format('d M Y') }}</p>
                    <p class="text-xs text-gray-400">{{ $latestTest->created_at->format('H:i') }}</p>
                </div>
            </div>
        </div>
        @else
        <div class="text-center py-12 text-gray-500">
            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>
            <p class="text-lg mb-2">Belum ada riwayat tes</p>
            <p class="text-sm text-gray-400">Mulai tes sekarang untuk melihat hasil di sini</p>
            <a href="{{ url('/test-interest') }}" class="inline-block mt-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg transition">
                Mulai Tes Sekarang
            </a>
        </div>
        @endif
    </div>
</div>

<style>
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    }
    
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
