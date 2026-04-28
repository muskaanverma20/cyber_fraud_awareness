
@extends('layouts.app')

@section('content')
!-- HERO SECTION -->
<section id="hero" class="position-relative home">

    <!-- IMAGE  -->
    <img src="{{ asset('img/payment-card.png') }}" class="w-100" alt="hero">
    <!-- TEXT OVER IMAGE -->
    <div class=" hero-content  position-absolute top-50 mt-5  s-0 translate-middle-y text-white ps-5">
        <h1 class="hero-title ">Secure Digital payments</h1>
        <br>
       <h2 class="hero-subtext ">Stay safe while transacting online</h2>
        <br>      
        <p class="hero-subtitle">Digital payments make life easy, but fraudsters are always looking for an opportunity. Be aware, be cautious, and protect your money.</p>
        <br>

</div>
</section>
<section id="payment-sec" class=payment-body>
<div class="cpf-main-wrapper">
    <div class="cpf-section-header">
        <span class="cpf-line"></span>
        <h2 class="cpf-section-title">Common Payment Frauds</h2>
        <span class="cpf-line"></span>
    </div>

    <section class="cpf-grid-container">
        <!-- UPI Fraud -->
        <div class="cpf-card cpf-card-purple">
            <div class="cpf-icon-container">
                <div class="cpf-icon-circle">
                    <i class="fas fa-mobile-alt"></i>
                    <span class="cpf-warning-tag">!</span>
                </div>
            </div>
            <h3 class="cpf-title">UPI Fraud</h3>
            <p class="cpf-desc">Fake payment requests, collect requests, and screen mirroring apps to steal money.</p>
        </div>

        <!-- Credit/Debit Card Fraud -->
        <div class="cpf-card cpf-card-red">
            <div class="cpf-icon-container">
                <div class="cpf-icon-circle">
                    <i class="fas fa-credit-card"></i>
                    <span class="cpf-warning-tag">!</span>
                </div>
            </div>
            <h3 class="cpf-title">Credit/Debit Card Fraud</h3>
            <p class="cpf-desc">Skimming devices, phishing websites, and OTP misuse to empty your account.</p>
        </div>

        <!-- Online Shopping Fraud -->
        <div class="cpf-card cpf-card-yellow">
            <div class="cpf-icon-container">
                <div class="cpf-icon-circle">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cpf-warning-tag">!</span>
                </div>
            </div>
            <h3 class="cpf-title">Online Shopping Fraud</h3>
            <p class="cpf-desc">Fake websites, payment gateway scams, and attractive offers to cheat you.</p>
        </div>

        <!-- Loan/EMI Fraud -->
        <div class="cpf-card cpf-card-green">
            <div class="cpf-icon-container">
                <div class="cpf-icon-circle">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span class="cpf-warning-tag">!</span>
                </div>
            </div>
            <h3 class="cpf-title">Loan/EMI Fraud</h3>
            <p class="cpf-desc">Fraudulent apps and websites demanding advance payments or hidden charges.</p>
        </div>
    </div>
    <div class="st-main-container">
    <div class="st-header">
        <span class="st-line"></span>
        <h2 class="st-title">Safety Tips</h2>
        <span class="st-line"></span>
    </div>

    <div class="st-grid">
        <!-- Tip 1: UPI ID -->
        <div class="st-card">
            <div class="st-icon-wrapper st-blue">
                <i class="fas fa-paper-plane"></i>
            </div>
            <p class="st-text">Always verify UPI ID before sending money.</p>
        </div>

        <!-- Tip 2: OTP/PIN -->
        <div class="st-card">
            <div class="st-icon-wrapper st-red">
                <i class="fas fa-lock"></i>
            </div>
            <p class="st-text">Never share OTP, PIN, or CVV with anyone.</p>
        </div>

        <!-- Tip 3: Official Apps -->
        <div class="st-card">
            <div class="st-icon-wrapper st-green">
                <i class="fas fa-shield-alt"></i>
            </div>
            <p class="st-text">Use official apps and websites only.</p>
        </div>

        <!-- Tip 4: Alerts -->
        <div class="st-card">
            <div class="st-icon-wrapper st-yellow">
                <i class="fas fa-bell"></i>
            </div>
            <p class="st-text">Enable transaction alerts on SMS or email.</p>
        </div>

        <!-- Tip 5: HTTPS -->
        <div class="st-card">
            <div class="st-icon-wrapper st-purple">
                <i class="fas fa-globe"></i>
            </div>
            <p class="st-text">Prefer secure payment gateways with HTTPS.</p>
        </div>
    </div>
</div>
<div class="ip-main-wrapper">
    <div class="ip-section-header">
        <span class="ip-line"></span>
        <h2 class="ip-section-title">Important Pages</h2>
        <span class="ip-line"></span>
    </div>

    <div class="ip-grid">
        <!-- 1. Alerts Page -->
        <div class="ip-card ip-border-blue">
            <div class="ip-card-top">
                <i class="fas fa-bell ip-icon-blue"></i>
                <h3 class="ip-title-blue">Alerts Page</h3>
            </div>
            <p class="ip-desc">Check the latest fraud alerts related to digital payments.</p>
            <a href="/alerts" class="ip-btn ip-btn-blue">View Alerts &rarr;</a>
        </div>

        <!-- 2. Report Page -->
        <div class="ip-card ip-border-red">
            <div class="ip-card-top">
                <i class="fas fa-file-alt ip-icon-red"></i>
                <h3 class="ip-title-red">Report Page</h3>
            </div>
            <p class="ip-desc">Report suspicious transactions or fraud attempts instantly.</p>
            <a href="/report" class="ip-btn ip-btn-red">Report Now &rarr;</a>
        </div>

        <!-- 3. Tips Page -->
        <div class="ip-card ip-border-green">
            <div class="ip-card-top">
                <i class="fas fa-lightbulb ip-icon-green"></i>
                <h3 class="ip-title-green">Tips Page</h3>
            </div>
            <p class="ip-desc">Explore more safety tips to protect yourself from payment frauds.</p>
            <a href="/tips" class="ip-btn ip-btn-green">View Tips &rarr;</a>
        </div>

        
        <div class="ip-card ip-border-purple">
            <div class="ip-card-top">
                <i class="fas fa-id-card ip-icon-purple"></i>
                <h3 class="ip-title-purple">Identity Card Page</h3>
            </div>
            <p class="ip-desc">Learn how identity card misuse is linked with payment frauds.</p>
                        <a href="/identity" class="ip-btn ip-btn-purple"> View Identity Info &rarr;</a>
        </div>
    </div>
</div>

<div class="otp-section-wrapper">
    <div class="otp-header">
        <span class="otp-header-line"></span>
        <h2 class="otp-header-title">Official & Trusted Portals</h2>
        <span class="otp-header-line"></span>
    </div>

    <div class="otp-container">
        <!-- 1. RBI Portal -->
        <div class="otp-item">
            <div class="otp-left">
                <!-- Replace with your actual RBI logo path -->
                <img src="{{ asset('img/rbi-logo.png') }}" alt="RBI Logo" class="otp-logo">
            </div>
            <div class="otp-right">
                <h3 class="otp-title">Reserve Bank of India (RBI)</h3>
                <a href="https://rbi.org.in" target="_blank" class="otp-link">https://rbi.org.in</a>
                <p class="otp-text">Report frauds and check secure banking guidelines.</p>
            </div>
        </div>

        <div class="otp-divider"></div>

        <!-- 2. NPCI Portal -->
        <div class="otp-item">
            <div class="otp-left">
                <!-- Replace with your actual NPCI logo path -->
                <img src="{{ asset('img/npci-logo.png') }}" alt="NPCI Logo" class="otp-logo">
            </div>
            <div class="otp-right">
                <h3 class="otp-title">National Payments Corporation of India (NPCI)</h3>
                <a href="https://npci.org.in" target="_blank" class="otp-link">https://npci.org.in</a>
                <p class="otp-text">Learn about safe digital payments and complaint redressal.</p>
            </div>
        </div>

        <div class="otp-divider"></div>

        <!-- 3. Bank Fraud Reporting -->
        <div class="otp-item">
            <div class="otp-left">
                <div class="otp-icon-box">
                    <i class="fas fa-university"></i>
                </div>
            </div>
            <div class="otp-right">
                <h3 class="otp-title">Bank Fraud Reporting</h3>
                <p class="otp-text">Contact your bank immediately or report at</p>
                <a href="https://cybercrime.gov.in" target="_blank" class="otp-link">https://cybercrime.gov.in</a>
            </div>
        </div>
    </div>
</div>

</section>

</section>




@endsection