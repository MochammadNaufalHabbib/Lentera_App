@extends('layouts.app')

@section('page_title', 'Tes Minat Bakat')

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
    <div class="max-w-3xl mx-auto">
        <!-- Header with Progress -->
        <div class="bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl p-6 mb-6 text-white shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h1 class="text-xl font-bold">Tes Minat & Bakat RIASEC</h1>
                    <p class="text-green-100 text-sm">Halaman {{ $page }} dari 6</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <span class="text-2xl">📝</span>
                </div>
            </div>
            <!-- Progress Bar -->
            <div class="w-full bg-white/20 rounded-full h-3">
                <div class="bg-white h-3 rounded-full transition-all duration-500" style="width: {{ ($page * 16.67) }}%"></div>
            </div>
            <p class="text-right text-sm text-green-100 mt-2">{{ ($page * 16.67) }}% selesai</p>
        </div>

        <!-- Question Form -->
        <form action="{{ $page == 6 ? route('test.finish') : route('test.submit') }}" method="POST" id="test-form">
            @csrf
            <input type="hidden" name="page" value="{{ $page }}">

            <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 mb-6">
                @foreach($questions as $num => $q)
                <div class="mb-10 pb-8 border-b border-gray-100 last:border-0 last:mb-0 last:pb-0">
                    <div class="flex items-start gap-3 mb-4">
                        <span class="w-8 h-8 bg-gradient-to-r from-green-400 to-emerald-500 rounded-lg flex items-center justify-center text-white font-bold text-sm flex-shrink-0">{{ $num }}</span>
                        <p class="text-lg font-semibold text-gray-800 leading-relaxed">{{ $q['text'] }}</p>
                    </div>
                    
                    <div class="space-y-3 ml-11">
                        @foreach([1, 2, 3, 4, 5] as $value)
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-green-300 hover:bg-green-50 transition-all group">
                            <input type="radio" name="answers[{{ $num }}]" value="{{ $value }}" class="w-5 h-5 text-green-600 focus:ring-green-500" required>
                            <div class="ml-3 flex-1">
                                <span class="text-gray-700 group-hover:text-green-700 transition-colors">
                                    @if($value == 1)
                                    1 - Sangat Tidak Setuju
                                    @elseif($value == 2)
                                    2 - Tidak Setuju
                                    @elseif($value == 3)
                                    3 - Netral
                                    @elseif($value == 4)
                                    4 - Setuju
                                    @else
                                    5 - Sangat Setuju
                                    @endif
                                </span>
                            </div>
                            <span class="text-2xl opacity-50 group-hover:opacity-100 transition-opacity">
                                @if($value == 1)😞@elseif($value == 2)😕@elseif($value == 3)😐@elseif($value == 4)🙂@else😊@endif
                            </span>
                        </label>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between items-center">
                @if($page > 1)
                <a href="{{ route('test.interest.page', $page - 1) }}" 
                   class="flex items-center gap-2 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 px-6 rounded-xl transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Sebelumnya
                </a>
                @else
                <div></div>
                @endif

                @if($page < 6)
                <button type="submit" 
                        class="flex items-center gap-2 bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white font-semibold py-3 px-8 rounded-xl transition-all shadow-lg hover:shadow-xl transform hover:scale-105">
                    Selanjutnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                @else
                <button type="submit" 
                        class="flex items-center gap-2 bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white font-bold py-3 px-8 rounded-xl transition-all shadow-lg hover:shadow-xl transform hover:scale-105">
                    <span>🎉</span>
                    Selesai & Lihat Hasil
                </button>
                @endif
            </div>
        </form>
        
        <!-- Tips -->
        <div class="mt-6 p-4 bg-amber-50 rounded-xl border border-amber-200">
            <p class="text-amber-800 text-sm flex items-center gap-2">
                <span>💡</span>
                Jawablah dengan jujur sesuai perasaan Anda yang sebenarnya
            </p>
        </div>
    </div>
</div>
@endsection
