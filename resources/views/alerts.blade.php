@extends('layouts.app')

@section('content')

<!-- HERO / BANNER -->
<section class="alerts-banner text-center py-5 bg-dark text-white">
    <div class="banner-content">
        <h1>🚨 Latest Fraud Alerts</h1>
        <p class="txt-light">Stay updated with recent cyber fraud activities</p>
    </div>
</section>

<!-- SEARCH + FILTER FORM -->
<section class="alerts-controls container mt-4">
    <form method="GET" action="{{ route('alerts') }}">
        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" name="search" class="form-control"
                       placeholder="Search alerts..." value="{{ $search }}">
            </div>
            <div class="col-md-6">
                <select name="type" class="form-control">


    <option value="all" {{ $type == 'all' ? 'selected' : '' }}>
        All Types
    </option>

    <!-- Existing Seeder Types -->
    <option value="bank" {{ $type == 'bank' ? 'selected' : '' }}>
        Bank Fraud
    </option>

    <option value="upi" {{ $type == 'upi' ? 'selected' : '' }}>
        UPI Fraud
    </option>

    <option value="job" {{ $type == 'job' ? 'selected' : '' }}>
        Job Scam
    </option>

    <hr>

    <!-- Report Page Fraud Types -->

    <option value="Phishing Scam" {{ $type == 'Phishing Scam' ? 'selected' : '' }}>Phishing Scam</option>

    <option value="Online Banking Fraud" {{ $type == 'Online Banking Fraud' ? 'selected' : '' }}>Online Banking Fraud</option>

    <option value="UPI Payment Fraud" {{ $type == 'UPI Payment Fraud' ? 'selected' : '' }}>UPI Payment Fraud</option>

    <option value="Credit Card Fraud" {{ $type == 'Credit Card Fraud' ? 'selected' : '' }}>Credit Card Fraud</option>

    <option value="Debit Card Fraud" {{ $type == 'Debit Card Fraud' ? 'selected' : '' }}>Debit Card Fraud</option>

    <option value="Identity Theft" {{ $type == 'Identity Theft' ? 'selected' : '' }}>Identity Theft</option>

    <option value="Social Media Scam" {{ $type == 'Social Media Scam' ? 'selected' : '' }}>Social Media Scam</option>

    <option value="OTP Scam" {{ $type == 'OTP Scam' ? 'selected' : '' }}>OTP Scam</option>

    <option value="QR Code Scam" {{ $type == 'QR Code Scam' ? 'selected' : '' }}>QR Code Scam</option>

    <option value="Fake Loan Scam" {{ $type == 'Fake Loan Scam' ? 'selected' : '' }}>Fake Loan Scam</option>

    <option value="Job Fraud" {{ $type == 'Job Fraud' ? 'selected' : '' }}>Job Fraud</option>

    <option value="Lottery Scam" {{ $type == 'Lottery Scam' ? 'selected' : '' }}>Lottery Scam</option>

    <option value="Investment Scam" {{ $type == 'Investment Scam' ? 'selected' : '' }}>Investment Scam</option>

    <option value="Crypto Currency Fraud" {{ $type == 'Crypto Currency Fraud' ? 'selected' : '' }}>Crypto Currency Fraud</option>

    <option value="Insurance Fraud" {{ $type == 'Insurance Fraud' ? 'selected' : '' }}>Insurance Fraud</option>

    <option value="E-Commerce Fraud" {{ $type == 'E-Commerce Fraud' ? 'selected' : '' }}>E-Commerce Fraud</option>

    <option value="Online Shopping Scam" {{ $type == 'Online Shopping Scam' ? 'selected' : '' }}>Online Shopping Scam</option>

    <option value="Fake Customer Care Scam" {{ $type == 'Fake Customer Care Scam' ? 'selected' : '' }}>Fake Customer Care Scam</option>

    <option value="SIM Swap Fraud" {{ $type == 'SIM Swap Fraud' ? 'selected' : '' }}>SIM Swap Fraud</option>

    <option value="Cyber Bullying" {{ $type == 'Cyber Bullying' ? 'selected' : '' }}>Cyber Bullying</option>

    <option value="Ransomware Attack" {{ $type == 'Ransomware Attack' ? 'selected' : '' }}>Ransomware Attack</option>

    <option value="Malware Attack" {{ $type == 'Malware Attack' ? 'selected' : '' }}>Malware Attack</option>

    <option value="Data Breach" {{ $type == 'Data Breach' ? 'selected' : '' }}>Data Breach</option>

    <option value="Email Spoofing" {{ $type == 'Email Spoofing' ? 'selected' : '' }}>Email Spoofing</option>

    <option value="Tech Support Scam" {{ $type == 'Tech Support Scam' ? 'selected' : '' }}>Tech Support Scam</option>

    <option value="ATM Fraud" {{ $type == 'ATM Fraud' ? 'selected' : '' }}>ATM Fraud</option>

    <option value="KYC Update Scam" {{ $type == 'KYC Update Scam' ? 'selected' : '' }}>KYC Update Scam</option>

    <option value="Fake APK / App Fraud" {{ $type == 'Fake APK / App Fraud' ? 'selected' : '' }}>Fake APK / App Fraud</option>

    <option value="Remote Access Scam" {{ $type == 'Remote Access Scam' ? 'selected' : '' }}>Remote Access Scam</option>

    <option value="Romance Scam" {{ $type == 'Romance Scam' ? 'selected' : '' }}>Romance Scam</option>

    <option value="Business Email Compromise" {{ $type == 'Business Email Compromise' ? 'selected' : '' }}>Business Email Compromise</option>

    <option value="Website Cloning Fraud" {{ $type == 'Website Cloning Fraud' ? 'selected' : '' }}>Website Cloning Fraud</option>

    <option value="Cyber Stalking" {{ $type == 'Cyber Stalking' ? 'selected' : '' }}>Cyber Stalking</option>

    <option value="Online Harassment" {{ $type == 'Online Harassment' ? 'selected' : '' }}>Online Harassment</option>

    <option value="Gaming Fraud" {{ $type == 'Gaming Fraud' ? 'selected' : '' }}>Gaming Fraud</option>

    <option value="Fake Donation Scam" {{ $type == 'Fake Donation Scam' ? 'selected' : '' }}>Fake Donation Scam</option>

    <option value="Parcel / Courier Scam" {{ $type == 'Parcel / Courier Scam' ? 'selected' : '' }}>Parcel / Courier Scam</option>

    <option value="Income Tax Scam" {{ $type == 'Income Tax Scam' ? 'selected' : '' }}>Income Tax Scam</option>

    <option value="Electricity Bill Scam" {{ $type == 'Electricity Bill Scam' ? 'selected' : '' }}>Electricity Bill Scam</option>

    <option value="Other Cyber Fraud" {{ $type == 'Other Cyber Fraud' ? 'selected' : '' }}>Other Cyber Fraud</option>

</select>
                  
            </div>
        </div>
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>
</section>

<!-- ALERT CARDS -->
<section class="alerts-list container mt-4 mb-5">
    <div class="row g-4">
        @forelse($alerts as $alert)
            <div class="col-md-4 alert-item {{ $alert->type }}">
                <div class="alert-card fade-up">
                    <span class="badge 
                        @if($alert->risk_level == 'high') bg-danger 
                        @elseif($alert->risk_level == 'medium') bg-warning text-dark 
                        @else bg-info text-dark @endif mb-2">
                        {{ ucfirst($alert->risk_level) }} Risk
                    </span>
                    <h4>{{ $alert->title }}</h4>
                    <p>{{ $alert->description }}</p>
                    <div class="meta">📅 {{ \Carbon\Carbon::parse($alert->alert_date)->format('F d, Y') }}</div>
                </div>
            </div>
        @empty
            <div class="text-center mt-4 text-danger fw-bold">
                No alerts found
            </div>
        @endforelse
    </div>
</section>

@endsection
