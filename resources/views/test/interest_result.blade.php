@extends('layouts.app')

@section('page_title', 'Hasil Tes Minat Bakat')

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
    <div class="max-w-4xl mx-auto">
        <!-- Header with Celebration -->
        <div class="relative overflow-hidden bg-gradient-to-r from-green-500 via-emerald-500 to-teal-500 rounded-2xl p-8 text-white mb-8 shadow-xl">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-10 rounded-full translate-y-1/2 -translate-x-1/2"></div>
            
            <div class="relative z-10 text-center">
                <div class="mb-4">
                    <span class="text-6xl">🎉</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold mb-2">Selamat! Tes Selesai!</h1>
                <p class="text-green-100 text-lg">Berdasarkan teori RIASEC (Holland Code)</p>
            </div>
        </div>

        <!-- Primary Type - Big Celebration -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8 text-center relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-400 via-emerald-500 to-teal-500"></div>
            
            <h2 class="text-xl font-bold text-gray-500 mb-6">Tipe Kepribadian Dominan Anda</h2>
            
            <div class="flex items-center justify-center mb-6">
                <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full flex items-center justify-center shadow-xl animate-pulse-slow">
                    <span class="text-6xl font-bold text-white">{{ $data->primary_type }}</span>
                </div>
            </div>
            
            @php
                $labels = [
                    'R' => ['Realistic', '🔧', 'Teknis & Praktis - Pekerjaan yang melibatkan aktivitas fisik, penggunaan alat, dan pekerjaan lapangan'],
                    'I' => ['Investigative', '🔬', 'Ilmiah & Analitis - Pekerjaan yang melibatkan penelitian, pemecahan masalah, dan berpikir kritis'],
                    'A' => ['Artistic', '🎨', 'Kreatif & Artistik - Pekerjaan yang melibatkan ekspresi diri, desain, dan inovasi'],
                    'S' => ['Social', '💬', 'Sosial & Helpers - Pekerjaan yang melibatkan membantu orang, mentoring, dan edukasi'],
                    'E' => ['Enterprising', '💼', 'Bisnis & Leadership - Pekerjaan yang melibatkan kepemimpinan, persuasi, dan manajemen'],
                    'C' => ['Conventional', '📊', 'Terstruktur & Admin - Pekerjaan yang melibatkan pengorganisasian, administrasi, dan ketelitian'],
                ];
                $typeInfo = $labels[$data->primary_type] ?? ['Unknown', '❓', ''];
            @endphp
            
            <h3 class="text-3xl font-bold text-gray-800 mb-2">{{ $typeInfo[0] }}</h3>
            <p class="text-2xl mb-4">{{ $typeInfo[1] }}</p>
            <p class="text-gray-600 max-w-md mx-auto">{{ $typeInfo[2] }}</p>
        </div>

        <!-- Scores -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span>📊</span> Skor Setiap Tipe
            </h2>
            
            @php
                $scores = [
                    'R' => $data->R,
                    'I' => $data->I,
                    'A' => $data->A,
                    'S' => $data->S,
                    'E' => $data->E,
                    'C' => $data->C,
                ];
                $maxScore = max($scores);
                $colors = [
                    'R' => 'from-red-400 to-red-600',
                    'I' => 'from-blue-400 to-blue-600',
                    'A' => 'from-purple-400 to-purple-600',
                    'S' => 'from-yellow-400 to-yellow-600',
                    'E' => 'from-orange-400 to-orange-600',
                    'C' => 'from-gray-400 to-gray-600',
                ];
            @endphp
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($scores as $key => $score)
                <div class="border-2 rounded-xl p-4 {{ $key == $data->primary_type ? 'border-green-500 bg-green-50' : 'border-gray-100' }} transition-all hover:shadow-md">
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-lg {{ $key == $data->primary_type ? 'text-green-600' : 'text-gray-700' }}">{{ $key }}</span>
                        <span class="text-sm text-gray-500">{{ $typeInfo[0] }}</span>
                    </div>
                    <div class="text-3xl font-bold bg-gradient-to-r {{ $colors[$key] }} bg-clip-text text-transparent">{{ $score }}</div>
                    <div class="w-full bg-gray-200 rounded-full h-2 mt-3">
                        <div class="bg-gradient-to-r {{ $colors[$key] }} h-2 rounded-full transition-all duration-1000" style="width: {{ ($score / $maxScore) * 100 }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Recommendations -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span>🎯</span> Rekomendasi Pekerjaan
            </h2>
            
            @php
                $recommendations = json_decode($data->recommendations, true);
            @endphp
            
            <div class="space-y-4">
                @foreach($recommendations as $index => $job)
                <div class="flex items-center p-5 border-2 rounded-xl transition-all hover:shadow-md {{ $index < 3 ? 'border-green-300 bg-green-50' : 'border-gray-100' }}">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center mr-4 {{ $index < 3 ? 'bg-gradient-to-r from-green-400 to-emerald-500 text-white' : 'bg-gray-200 text-gray-600' }}">
                        @if($index == 0)
                        <span class="text-lg">🥇</span>
                        @elseif($index == 1)
                        <span class="text-lg">🥈</span>
                        @elseif($index == 2)
                        <span class="text-lg">🥉</span>
                        @else
                        <span class="font-bold">{{ $index + 1 }}</span>
                        @endif
                    </div>
                    <span class="font-semibold text-gray-800 text-lg">{{ $job }}</span>
                </div>
                @endforeach
            </div>
            
            <div class="mt-6 p-4 bg-blue-50 rounded-xl text-blue-700 text-sm text-center">
                💡 <strong>Tips:</strong> Klik "Tes Ulang" untuk melihat hasil yang berbeda jika Anda ingin mengeksplorasi tipe lain
            </div>
        </div>

        <!-- Actions -->
        <div class="mt-8 flex flex-col md:flex-row justify-center gap-4">
            <a href="{{ url('/dashboard') }}" 
               class="flex items-center justify-center gap-2 bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded-xl transition-all hover:shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Kembali ke Dashboard
            </a>
            <a href="{{ url('/test-interest') }}" 
               class="flex items-center justify-center gap-2 bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white font-bold py-3 px-8 rounded-xl transition-all hover:shadow-lg transform hover:scale-105">
                <span>🔄</span>
                Tes Ulang
            </a>
        </div>
    </div>
</div>

<style>
    @keyframes pulse-slow {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }
</style>
@endsection
