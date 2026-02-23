<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'text',
        'options',
        'order',
    ];

    protected $casts = [
        'options' => 'array',
    ];
}
