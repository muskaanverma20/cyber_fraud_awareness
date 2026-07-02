<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Default Admin 1
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]);
        }

        // Default Admin 2
        if (!User::where('email', 'admin2@example.com')->exists()) {
            User::create([
                'name' => 'DefaultAdmin2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]);
        }
    }
}
