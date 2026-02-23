<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalPortfolio extends Model
{
    use HasFactory;

    protected $table = 'personal_portfolios';

    protected $fillable = [
        'title',
        'description',
        'image',
        'link',
        'category',
        'order',
    ];
}
