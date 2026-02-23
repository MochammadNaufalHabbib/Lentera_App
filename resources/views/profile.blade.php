@extends('layouts.app')

@section('page_title', 'Profil')

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
        <!-- Profile Card -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 h-32"></div>
            
            <!-- Profile Content -->
            <div class="px-6 pb-6">
                <!-- Avatar -->
                <div class="relative -mt-16 mb-4">
                    <div class="w-32 h-32 bg-white rounded-full p-1 mx-auto">
                        <div class="w-full h-full bg-indigo-100 rounded-full flex items-center justify-center">
                            <span class="text-4xl font-bold text-indigo-600">{{ substr(auth()->user()->name, 0, 1) }}</span>
                        </div>
                    </div>
                </div>

                <!-- User Info -->
                <div class="text-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">{{ auth()->user()->name }}</h1>
                    <p class="text-gray-500">{{ auth()->user()->email }}</p>
                </div>

                <!-- Details -->
                <div class="space-y-4">
                    <div class="flex items-center py-3 border-b border-gray-100">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Pendidikan</p>
                            <p class="font-semibold text-gray-800">{{ auth()->user()->education ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="flex items-center py-3 border-b border-gray-100">
                        <div class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Jenis Kelamin</p>
                            <p class="font-semibold text-gray-800">{{ auth()->user()->gender ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="flex items-center py-3 border-b border-gray-100">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Usia</p>
                            <p class="font-semibold text-gray-800">{{ auth()->user()->age ?? '-' }} tahun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
