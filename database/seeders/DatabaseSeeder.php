<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Alert;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ==========================
        // Default Admin Users
        // ==========================
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]);
        }

        if (!User::where('email', 'admin2@example.com')->exists()) {
            User::create([
                'name' => 'DefaultAdmin2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]);
        }

        // ==========================
        // Fraud Alerts Demo Records
        // ==========================
        if (!Alert::where('title', 'Fake Bank Call Scam')->exists()) {
            Alert::create([
                'title' => 'Fake Bank Call Scam',
                'description' => 'Scammers pretend to be bank officials asking for OTP.',
                'type' => 'bank', // exact match with dropdown
                'risk_level' => 'high',
                'alert_date' => '2026-04-10'
            ]);
        }

        if (!Alert::where('title', 'UPI Request Fraud')->exists()) {
            Alert::create([
                'title' => 'UPI Request Fraud',
                'description' => 'Never approve unknown payment requests.',
                'type' => 'upi', // exact match with dropdown
                'risk_level' => 'medium',
                'alert_date' => '2026-04-05'
            ]);
        }

        if (!Alert::where('title', 'Fake Job Offer Emails')->exists()) {
            Alert::create([
                'title' => 'Fake Job Offer Emails',
                'description' => 'Fraud emails asking for registration fees.',
                'type' => 'job', //  exact match with dropdown
                'risk_level' => 'low',
                'alert_date' => '2026-03-30'
            ]);
        }
    }
}
