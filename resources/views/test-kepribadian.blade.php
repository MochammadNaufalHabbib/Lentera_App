@extends('layouts.app')

@section('page_title', 'Tes Kepribadian')

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
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl p-8 text-white mb-8">
            <h1 class="text-3xl font-bold">Tes Kepribadian</h1>
            <p class="mt-2 text-blue-100">Kenali tipe kepribadian Anda</p>
        </div>

        <!-- Coming Soon -->
        <div class="bg-white rounded-xl shadow-lg p-12 text-center">
            <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Segera Hadir</h2>
            <p class="text-gray-600 mb-6">
                Fitur Tes Kepribadian sedang dalam pengembangan. 
                Saat ini Anda dapat mengikuti Tes Minat Bakat terlebih dahulu.
            </p>
            <a href="{{ url('/test-interest') }}" class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg transition">
                Ikuti Tes Minat Bakat
            </a>
        </div>

        <!-- Back Button -->
        <div class="mt-8 text-center">
            <a href="{{ url('/dashboard') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
                ← Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>
@endsection
