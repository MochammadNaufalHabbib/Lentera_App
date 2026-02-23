<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalProfile extends Model
{
    use HasFactory;

    protected $table = 'personal_profiles';

    protected $fillable = [
        'name',
        'tagline',
        'about',
        'photo',
        'email',
        'phone',
        'address',
        'linkedin',
        'github',
        'instagram',
    ];
}
