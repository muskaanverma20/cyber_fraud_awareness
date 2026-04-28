@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section id="hero" class="position-relative home">

    <!-- IMAGE  -->
    <img src="{{ asset('img/identity.png') }}" class="w-100" alt="hero">
    <!-- TEXT OVER IMAGE -->
    <div class=" hero-content  position-absolute top-50 mt-5  s-0 translate-middle-y text-white ps-5">
        <h1 class="hero-title ">Identity Card Safety</h1>
        <br>
       <h2 class="hero-subtext ">Protect your personal identity from fraudsters</h2>
        <br>      
        <p class="hero-subtitle">Your identity cards contain senstive personal information. Be aware, be cautions and keep your identity secure.</p>
        <br>
        <div class="hero-buttons">

    <br>
</div>
</section>
<!-- Identity Cards Section -->
<section class="id-sec-wrap">

    <div class="id-grid-wrap">

        <!-- Card 1 -->
        <div class="id-info-box blue-theme">
            <div class="id-head-row">
                <div class="id-icon-circle blue-circle">
                    <i class="fa-solid fa-id-card"></i>
                </div>
                <h2>What is an <br> Identity Card?</h2>
            </div>

            <p class="id-main-text">
                Identity cards are official documents issued by the
                government to establish your identity.
            </p>

            <ul class="id-list-box">
                <li><i class="fa-solid fa-address-card"></i> Aadhaar Card – UIDAI issued</li>
                <li><i class="fa-solid fa-user-check"></i> PAN Card – Tax identity</li>
                <li><i class="fa-solid fa-users"></i> Voter ID – Election proof</li>
                <li><i class="fa-solid fa-car-side"></i> Driving License – Driving permit</li>
            </ul>

            <p class="id-bottom-text">
                Important for banking, travel, SIM registration and services.
            </p>
        </div>


        <!-- Card 2 -->
        <div class="id-info-box red-theme">
            <div class="id-head-row">
                <div class="id-icon-circle orange-circle">
                    <i class="fa-solid fa-user-secret"></i>
                </div>
                <h2>Common Identity <br> Card Frauds</h2>
            </div>

            <ul class="fraud-list-box">
                <li><i class="fa-solid fa-triangle-exclamation"></i> Fake Aadhaar/PAN used for loans</li>
                <li><i class="fa-solid fa-triangle-exclamation"></i> Duplicate voter ID scams</li>
                <li><i class="fa-solid fa-triangle-exclamation"></i> Driving license misuse</li>
                <li><i class="fa-solid fa-triangle-exclamation"></i> Unknown site ID upload theft</li>
            </ul>
        </div>


        <!-- Card 3 -->
        <div class="id-info-box green-theme">
            <div class="id-head-row">
                <div class="id-icon-circle green-circle">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h2>Safety Tips</h2>
            </div>

            <ul class="safe-list-box">
                <li><i class="fa-solid fa-circle-check"></i> Don't share photocopies without watermark</li>
                <li><i class="fa-solid fa-circle-check"></i> Avoid unknown websites</li>
                <li><i class="fa-solid fa-circle-check"></i> Use masked Aadhaar</li>
                <li><i class="fa-solid fa-circle-check"></i> Verify site before upload</li>
                <li><i class="fa-solid fa-circle-check"></i> Keep physical cards secure</li>
            </ul>
        </div>

    </div>
  <div class="security-section-container">
    <div class="security-grid">

        <!-- 1 -->
        <div class="security-card card-alertss">
            
            <div class="card-top">
                <div class="card-icon1">
                    <i class="fas fa-bell"></i> 
                </div>
                <h3 class="card-heading">Alerts Page</h3>
            </div>

            <p class="card-text">
                Check the latest fraud alerts related to identity card misuse.
            </p>

            <a href="/alerts" class="card-link btn-alerts">View Alerts →</a>
        </div>

        <!-- 2 -->
        <div class="security-card card-reportt">

            <div class="card-top">
                <div class="card-icon1">
                    <i class="fas fa-edit"></i>
                </div>
                <h3 class="card-heading">Report Page</h3>
            </div>

            <p class="card-text">
                Report identity card misuse or fraud attempt.
            </p>

            <a href="/report" class="card-link btn-report">Report Now →</a>
        </div>

        <!-- 3 -->
        <div class="security-card card-tipss">

            <div class="card-top">
                <div class="card-icon1">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="card-heading">Tips Page</h3>
            </div>

            <p class="card-text">
                Read safety tips to protect your identity cards.
            </p>

            <a href="/tips" class="card-link btn-tips">View Tips →</a>
        </div>

        <!-- 4 -->
        <div class="security-card card-phishing">

            <div class="card-top">
                <div class="card-icon1">
                    <i class="fas fa-anchor"></i>
                </div>
                <h3 class="card-heading">Phishing Page</h3>
            </div>

            <p class="card-text">
                Learn about phishing attacks and stay safe online.
            </p>

            <a href="/phishing" class="card-link btn-phishing">Learn More →</a>
        </div>

    </div>
</div>
<div class="trusted-section">
    <div class="section-header">
        <span class="line"></span>
        <h2 class="hero-subtext">Important Government Portals</h2>
        <span class="line"></span>
    </div>

    <div class="portals-container">
        <!-- RBI Portal -->
        <div class="portal-item">
            <div class="portal-left">
                <img src="{{ asset('img/adhaar-logo.png') }}" alt="RBI Logo" class="portal-logo ">
            </div>
            <div class="portal-right">
                <h3>UIDAI(Aadhaar)</h3>
                <a href="https://uidai.gov.in" target="_blank">https://uidai.gov.in</a>
                <p>Toll Free: 1947</p>
            </div>
        </div>

        <div class="divider"></div>

        <!-- NPCI Portal -->
        <div class="portal-item">
            <div class="portal-left">
                <img src="{{ asset('img/income-logo.png') }}" alt="NPCI Logo" class="portal-logo">
            </div>
            <div class="portal-right">
                <h3>PAN Services</h3>
                <a href="https://www.incometax.gov.in" target="_blank">https://www.incometax.gov.in</a>
                <p>Toll Free: 1800 103 0025</p>
            </div>
        </div>

        <div class="divider"></div>

        <!-- Bank Fraud Reporting -->
        <div class="portal-item">
            <div class="portal-left">
                <div class="bank-icon ">
                <img src="{{ asset('img/eci-logo.png') }}" alt="NPCI Logo" class="portal-logo">
                </div>
            </div>
            <div class="portal-right">
                <h3>Bank Fraud Reporting</h3>
                <a href="https://eci.gov.in" target="_blank">https://eci.gov.in</a>
              <p>Toll Free:1950</p>
            </div>
        </div>
    </div>
</div>

</section>
@endsection