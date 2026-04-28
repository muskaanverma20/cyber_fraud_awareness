@extends('layouts.app')

@section('content')

<!-- SECTION 1: HERO (Image with Content & Features) -->
<section id="hero" class="hero-section-new position-relative">
    <!-- Main Hero Image -->
    <img src="{{ asset('img/call.jpg') }}" class="hero-img-full" alt="Expert Fraud Prevention">
    
    <!-- Text Over Image -->
    <div class="hero-overlay-text position-absolute top-50 start-0 translate-middle-y ps-5 text-white">
        <h1 class="display-3 fw-bold">Expert Fraud <br><span class="text-info">Prevention Solutions</span></h1>
        <p class="lead mt-3 w-75">
            We provide expert consultancy to help organizations detect, prevent and respond to fraud effectively.
            Our services include fraud detection strategies, awareness campaigns, and cyber audits.
        </p>

        <!-- Features Bar inside Hero (As per your Image) -->
        <div class="hero-features-bar mt-5 d-flex gap-4">
            <div class="feat-item d-flex align-items-center gap-2">
                <i class="fas fa-user-shield fa-2x text-info"></i>
                <div><strong>Trusted Experts</strong><br><small>Industry professionals</small></div>
            </div>
            <div class="feat-item d-flex align-items-center gap-2">
                <i class="fas fa-chart-line fa-2x text-info"></i>
                <div><strong>Proven Approach</strong><br><small>Data-driven results</small></div>
            </div>
            <div class="feat-item d-flex align-items-center gap-2">
                <i class="fas fa-headset fa-2x text-info"></i>
                <div><strong>End-to-End Support</strong><br><small>24/7 Monitoring</small></div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: SERVICES (Background Limited to this Section Only) -->
<section class="services-wrapper">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="text-white display-5 fw-bold">Our Expert Services</h2>
            <p class="text-white-50">Comprehensive solutions to strengthen your security posture.</p>
        </div>

        <div class="services-grid-layout">
            <!-- Card 1 -->
            <div class="service-card-glass">
                <div class="icon-wrap icon-green"><i class="fas fa-clipboard-list"></i></div>
                <h3>Corporate Cyber Audit</h3>
                <ul class="service-points list-unstyled">
                    <li><i class="fas fa-check"></i> Security gap analysis</li>
                    <li><i class="fas fa-check"></i> Policy review</li>
                    <li><i class="fas fa-check"></i> Audit reports</li>
                </ul>
                <a href="#" class="btn-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 2 -->
            <div class="service-card-glass">
                <div class="icon-wrap icon-blue"><i class="fas fa-users-cog"></i></div>
                <h3>Employee Awareness</h3>
                <ul class="service-points list-unstyled">
                    <li><i class="fas fa-check"></i> Interactive training</li>
                    <li><i class="fas fa-check"></i> Phishing simulations</li>
                    <li><i class="fas fa-check"></i> Best practices</li>
                </ul>
                <a href="#" class="btn-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Card 3 & 4 (Add similarly) -->
        </div>

        <!-- Call to Action Banner (Limited to Section 2) -->
        <div class="cta-glass-banner mt-5">
            <div class="cta-info">
                <h2>Let's Build a Safer Future Together</h2>
                <p>Partner with us to reduce risks and create a security culture.</p>
            </div>
            <a href="#" class="btn btn-success btn-lg">Book a Consultation</a>
        </div>
    </div>
</section>

@endsection
