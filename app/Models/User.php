<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom yang bisa diisi (mass assignable)
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        // Tambahan profil
        'photo',
        'birth_place',
        'birth_date',
        'address',
        'phone',
        
        // Data registrasi
        'education',
        'gender',
        'age',
        'otp_code',
        'otp_expires_at',
        'is_verified',
    ];

    /**
     * Kolom yang disembunyikan pada serialisasi
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Konversi otomatis tipe data kolom
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'birth_date' => 'date',
            'password' => 'hashed',
        ];
    }
}
