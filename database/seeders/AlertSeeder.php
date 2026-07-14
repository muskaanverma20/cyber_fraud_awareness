<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alert;

class AlertSeeder extends Seeder
{
    public function run(): void
    {
        Alert::create([
            'title' => 'Fake Bank Call Scam',
            'description' => 'Scammers pretend to be bank officials asking for OTP.',
            'type' => 'bank', //  exact match with dropdown
            'risk_level' => 'high',
            'alert_date' => '2026-04-10'
        ]);

        Alert::create([
            'title' => 'UPI Request Fraud',
            'description' => 'Never approve unknown payment requests.',
            'type' => 'upi', //  exact match with dropdown
            'risk_level' => 'medium',
            'alert_date' => '2026-04-05'
        ]);

        Alert::create([
            'title' => 'Fake Job Offer Emails',
            'description' => 'Fraud emails asking for registration fees.',
            'type' => 'job', // exact match with dropdown
            'risk_level' => 'low',
            'alert_date' => '2026-03-30'
        ]);
    }
}
