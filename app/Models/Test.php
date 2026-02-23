<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['user_id', 'scores', 'recommendations'];
    protected $casts = [
        'scores' => 'array',
        'recommendations' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}