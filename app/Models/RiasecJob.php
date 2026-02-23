<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiasecJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'job_name',
    ];
}
