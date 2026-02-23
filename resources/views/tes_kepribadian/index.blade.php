@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- Judul Halaman --}}
    <h4 class="mb-3 fw-bold">Tes Kepribadian</h4>

    {{-- Card / Bar Informasi --}}
    <div class="card shadow-sm border-0 rounded-3 mb-4">
        <div class="card-body">

            <div class="alert alert-info rounded-3 p-4" role="alert">
                <h5 class="fw-bold mb-2">Fitur Sedang Dalam Pengembangan</h5>

                <p class="mb-2">
                    Tes kepribadian saat ini sedang dalam pengembangan. 
                    Fitur ini akan segera tersedia untuk membantu Anda mengenal kepribadian Anda lebih dalam.
                </p>

                <div class="mt-3 p-3 bg-light rounded border">
                    <strong>Segera Hadir:</strong><br>
                    Tes kepribadian komprehensif dengan analisis mendalam 
                    untuk membantu Anda menemukan karir yang paling sesuai 
                    dengan karakter unik Anda.
                </div>
            </div>

            {{-- Tombol Kembali --}}
            <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-2">
                ← Kembali ke Dashboard
            </a>

        </div>
    </div>

</div>
@endsection
