<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalEducation extends Model
{
    use HasFactory;

    protected $table = 'personal_educations';

    protected $fillable = [
        'institution',
        'degree',
        'major',
        'start_year',
        'end_year',
        'is_current',
        'order',
    ];

    protected $casts = [
        'is_current' => 'boolean',
    ];
}
