@extends('layouts.app')

@section('content')

<style>
    .coming-container {
        max-width: 700px;
        margin: 70px auto;
        text-align: center;
        padding: 30px;
    }

    .coming-title {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .note {
        background: #fff3cd;
        padding: 15px;
        border-radius: 10px;
        margin-top: 12px;
        border-left: 5px solid #ffcc00;
    }

    .btn-back {
        margin-top: 25px;
        padding: 12px 30px;
        background: #4a6cf7;
        border-radius: 10px;
        color: white;
        font-size: 18px;
        text-decoration: none;
        font-weight: 600;
    }
</style>

<div class="coming-container">

    <h2 class="coming-title">
        Tes Kepribadian Sedang Dalam Pengembangan
    </h2>

    <p>
        Tes kepribadian akan segera tersedia untuk membantu Anda mengenal kepribadian
        Anda lebih dalam.
    </p>

    <div class="note">
        Segera Hadir: Tes kepribadian komprehensif dengan analisis mendalam untuk membantu
        Anda menemukan karir yang paling sesuai dengan karakter unik Anda.
    </div>

    <a href="{{ route('dashboard') }}" class="btn-back">Kembali ke Dashboard</a>

</div>

@endsection
