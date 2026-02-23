@extends('layouts.app')

@section('page_title', 'Riwayat Tes')

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
        <!-- Header -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-8 text-white mb-8">
            <h1 class="text-3xl font-bold">Riwayat Tes</h1>
            <p class="mt-2 text-indigo-100">Lihat hasil tes yang telah Anda lakukan</p>
        </div>

        @if($histories->isEmpty())
        <!-- Empty State -->
        <div class="bg-white rounded-xl shadow-lg p-12 text-center">
            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">Belum Ada Riwayat Tes</h2>
            <p class="text-gray-500 mb-6">Anda belum melakukan tes apapun. Mulai tes sekarang!</p>
            <a href="{{ url('/test-interest') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition">
                Mulai Tes Minat Bakat
            </a>
        </div>
        @else
        <!-- History List -->
        <div class="space-y-4">
            @foreach($histories as $history)
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-2xl font-bold text-indigo-600">{{ $history->primary_type }}</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Tes Minat Bakat</h3>
                            <p class="text-gray-500">{{ \Carbon\Carbon::parse($history->created_at)->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="inline-block px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full font-semibold">
                            Tipe: {{ $history->primary_type }}
                        </span>
                        <a href="{{ route('test.interest.result', $history->id) }}" 
                           class="block mt-2 text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                            Lihat Detail →
                        </a>
                    </div>
                </div>
                
                <!-- Score Preview -->
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="grid grid-cols-6 gap-2 text-center text-sm">
                        <div>
                            <span class="block font-bold text-gray-700">R</span>
                            <span class="text-gray-500">{{ $history->R }}</span>
                        </div>
                        <div>
                            <span class="block font-bold text-gray-700">I</span>
                            <span class="text-gray-500">{{ $history->I }}</span>
                        </div>
                        <div>
                            <span class="block font-bold text-gray-700">A</span>
                            <span class="text-gray-500">{{ $history->A }}</span>
                        </div>
                        <div>
                            <span class="block font-bold text-gray-700">S</span>
                            <span class="text-gray-500">{{ $history->S }}</span>
                        </div>
                        <div>
                            <span class="block font-bold text-gray-700">E</span>
                            <span class="text-gray-500">{{ $history->E }}</span>
                        </div>
                        <div>
                            <span class="block font-bold text-gray-700">C</span>
                            <span class="text-gray-500">{{ $history->C }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <!-- Back Button -->
        <div class="mt-8 text-center">
            <a href="{{ url('/dashboard') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
                ← Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>
@endsection
