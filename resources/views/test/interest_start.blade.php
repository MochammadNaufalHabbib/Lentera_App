@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f8f9fa;
    }

    .container-test {
        max-width: 900px;
        margin: auto;
        padding: 30px 20px;
        text-align: center;
    }

    .title-main {
        font-size: 38px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .subtitle {
        font-size: 20px;
        color: #444;
        margin-bottom: 25px;
    }

    .definition-box {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        line-height: 1.7;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .note {
        margin-top: 15px;
        font-size: 17px;
        background: #fff3cd;
        padding: 15px;
        border-radius: 12px;
        border-left: 5px solid #ffca2c;
    }

    .btn-start {
        display: inline-block;
        margin-top: 30px;
        padding: 15px 35px;
        background: #4a6cf7;
        color: white;
        font-size: 22px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.2s;
    }
    .btn-start:hover {
        background: #3d5be0;
        transform: translateY(-3px);
    }
</style>

<div class="container-test">

    <h1 class="title-main">TES MINAT DAN BAKAT</h1>
    <p class="subtitle">Lihat Rekomendasi Pekerjaan yang Paling Cocok Dengan Bakatmu!</p>

    <div class="definition-box">
        <strong>Definisi Tes Minat dan Bakat:</strong><br><br>
        Test minat dan bakat adalah suatu alat atau prosedur penilaian psikologis yang digunakan
        untuk mengukur ketertarikan (minat) seseorang terhadap bidang tertentu serta kemampuan alami
        atau potensi (bakat) yang dimilikinya, guna membantu menentukan pilihan pendidikan, karier,
        atau pengembangan diri yang paling sesuai.
    </div>

    <div class="note">
        <strong>Note:</strong> Tidak ada jawaban salah dan benar ya 🙂  
        Jawablah dengan penuh kejujuran!
    </div>

    <a href="{{ route('test.interest.start') }}" class="btn-start">
        Mulai Tes Sekarang
    </a>

</div>

@endsection
