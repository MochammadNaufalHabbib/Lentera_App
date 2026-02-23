<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riasec3Combination extends Model
{
    use HasFactory;

    protected $table = 'riasec_3_combinations';
    protected $fillable = ['code', 'job_name'];
}
