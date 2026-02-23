<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestHistory extends Model
{
    protected $fillable = [
        'user_id', 'R','I','A','S','E','C',
        'primary_type','secondary_type','recommendations'
    ];

    protected $casts = [
        'recommendations' => 'array'
    ];
}
