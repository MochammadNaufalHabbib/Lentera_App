<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTestSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Tester Login',
            'email' => 'test@login.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
