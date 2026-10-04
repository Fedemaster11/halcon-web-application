<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Federico Macias',
            'email' => 'federico@halcon.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Maria Lopez',
            'email' => 'maria@halcon.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Carlos Ramirez',
            'email' => 'carlos@halcon.com',
            'password' => Hash::make('password123'),
        ]);
    }
}