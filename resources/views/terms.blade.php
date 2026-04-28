@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
        <img src="{{ asset('img/admin1_cleanup.webp') }}" class="hero-img" alt="hero">
    <div class=" hero-content  position-absolute top-40 m-5 s-0 translate-middle-y text-white ps-5">
        <h1 class="hero-title ">Privacy Policy!</h1>
            <p class="breadcrumb "><strong><a href="/">Home</a></strong>>&nbsp;Privacy Policy</p>
        </div>
</section>
<section id="terms-body" class="term-body ">
<div class="container terms-layout mt-0">
    
    <!-- General Rules Section -->
    <section class="section-box">
        <h2 class="section-tittle "><i class="fas fa-file-alt txt-light"></i> General Rules</h2>
        <div class="rules-grid">
            <div class="site-guidelines">
                <h4>Site usage guidelines</h4>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Provide accurate and truthful information.</li>
                    <li><i class="fas fa-check-circle"></i> Use the platform only for genuine and lawful purposes.</li>
                    <li><i class="fas fa-check-circle"></i> Do not attempt to hack, disrupt or damage the website.</li>
                    <li><i class="fas fa-check-circle"></i> Respect the privacy and rights of others.</li>
                    <li><i class="fas fa-check-circle"></i> Use secure devices and networks while accessing the site.</li>
                </ul>
            </div>
            <div class="user-responsibilities alert-box">
                <h4>User responsibilities</h4>
                <div class="warning-card">
                    <i class="fas fa-exclamation-triangle"></i>
                    <div>
                        <strong>Do not misuse fraud reporting system</strong>
                        <p>False, misleading or fraudulent reports can lead to legal action under applicable laws.</p>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- Legal Clauses Section -->
        <h2 class="section-tittle"><i class="fas fa-gavel txt-light"></i> Legal Clauses</h2>
        <div class="clauses-grid">
            <div class="clause-card glass-effect">
                <i class="fas fa-user-shield icon-blue"></i>
                <h3>Limitation of liability</h3>
                <p>We are not liable for any direct, indirect, incidental or consequential damages arising from the use or inability to use this website.</p>
            </div>
            <div class="clause-card glass-effect">
                <i class="fas fa-balance-scale icon-green"></i>
                <h3>Governing law</h3>
                <p>These terms shall be governed by and interpreted in accordance with the laws of India, including the IT Act, 2000.</p>
            </div>
            <div class="clause-card glass-effect">
                <i class="fas fa-exclamation-circle icon-orange"></i>
                <h3>Disclaimer of warranties</h3>
                <p>The website is provided on an "as is" and "as available" basis without any warranties of any kind.</p>
            </div>
        </div>
    

    <!-- Important Links Section -->
        <h2 class="section-tittle"><i class="fas fa-link txt-light"></i> Important Links</h2>
        <div class="links-grid">
            <a href="{{ url('/privacy') }}" class="link-item">
                <i class="fas fa-check-square"></i> Privacy Policy <i class="fas fa-arrow-right"></i>
            </a>
            <a href="{{ url('/disclaimer') }}" class="link-item purple">
                <i class="fas fa-file-signature"></i> Disclaimer <i class="fas fa-arrow-right"></i>
            </a>
            <a href="{{ url('/cookies') }}" class="link-item green">
                <i class="fas fa-cookie-bite"></i> Cookie Policy <i class="fas fa-arrow-right"></i>
            </a>
            <a href="{{ url('/report') }}" class="link-item red">
                <i class="fas fa-exclamation-triangle"></i> Report Fraud <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    

    <!-- Contact Information -->
    <div class="contant-box contact-section">
        <h2 class="section-tittle"><i class="fas fa-phone-alt txt-light"></i> Contact Information</h2>
        <div class="contact-grid">
            <div class="contact-card glass-effect">
                <i class="fas fa-phone-volume"></i>
                <div>
                    <h4>Helpline</h4>
                    <h3>1930</h3>
                    <p>Available 24/7 for cyber fraud reporting.</p>
                </div>
            </div>
            <div class="contact-card glass-effect">
                <i class="fas fa-envelope-open-text"></i>
                <div>
                    <h4>Support Email</h4>
                    <h3>support@cybersafety.gov.in</h3>
                    <p>We aim to respond within 24 working hours.</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>
</section>
@endsection