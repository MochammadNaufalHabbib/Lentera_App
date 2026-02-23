<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalSkill extends Model
{
    use HasFactory;

    protected $table = 'personal_skills';

    protected $fillable = [
        'name',
        'level',
        'category',
        'order',
    ];
}
