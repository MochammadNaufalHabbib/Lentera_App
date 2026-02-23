@extends('layouts.app')

@section('content')

<style>
    .profile-container {
        max-width: 900px;
        margin: 40px auto;
        background: white;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .back-btn {
        font-size: 26px;
        cursor: pointer;
        margin-bottom: 15px;
        display: inline-block;
    }

    .profile-wrapper {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .profile-photo {
        position: relative;
    }

    .profile-img {
        width: 170px;
        height: 170px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #ddd;
    }

    .camera-icon {
        position: absolute;
        bottom: 8px;
        right: 10px;
        width: 42px;
        cursor: pointer;
    }

    .profile-info {
        font-size: 18px;
    }

    .profile-info p {
        margin: 8px 0;
    }
</style>

<div class="profile-container">

    {{-- BACK BUTTON --}}
    <div onclick="location.href='{{ route('dashboard') }}'" class="back-btn">←</div>

    <h2 style="font-weight:700; margin-bottom:25px;">Profil Pengguna</h2>

    <div class="profile-wrapper">

        {{-- PHOTO --}}
        <div class="profile-photo">
            <img 
                src="{{ $user->photo ? asset('storage/'.$user->photo) : asset('images/ProfilePicture.png') }}"  
                class="profile-img"
            >

            <form id="photoForm" action="{{ route('profile.upload.photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" id="photoInput" name="photo" accept="image/*" style="display:none;" onchange="document.getElementById('photoForm').submit();">
            </form>

            <img src="{{ asset('images/IconCamera.png') }}" class="camera-icon" onclick="document.getElementById('photoInput').click();">
        </div>

        {{-- USER INFO --}}
        <div class="profile-info">
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $user->birth_place ?? '-' }}, {{ $user->birth_date ?? '-' }}</p>
            <p><strong>Alamat:</strong> {{ $user->address ?? '-' }}</p>
            <p><strong>No. Telepon:</strong> {{ $user->phone ?? '-' }}</p>
        </div>

    </div>
</div>

@endsection
