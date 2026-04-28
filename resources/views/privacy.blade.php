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

<!-- Main Body Section -->
<main class="container main-layout">
    <!-- Left Content Section -->
    <div class="content-left">
        <div class="intro-box m-5 glass-effect">
            <i class="fas fa-check-circle"></i>
            <p>Your privacy is important to us. This Privacy Policy explains how we collect, use, protect, and share your information when you use our services.</p>
        </div>

        <section class="policy-details">
            <div class="policy-item">
                <h3><i class="fas fa-database"></i> 1. Information We Collect</h3>
                <p>We collect information that you provide directly to us, such as when you report a fraud, contact us, or subscribe to our updates. This may include your name, email address, phone number, and details about the incident.</p>
            </div>

            <div class="policy-item">
                <h3><i class="fas fa-sync-alt"></i> 2. How We Use Your Information</h3>
                <p>We use the information we collect to provide, maintain, and improve our services, communicate with you, protect against fraud, and comply with legal obligations.</p>
            </div>

            <div class="policy-item">
                <h3><i class="fas fa-users-cog"></i> 3. Information Sharing</h3>
                <p>We do not sell your personal information. We may share your information with trusted third parties only when necessary to provide our services or when required by law.</p>
            </div>
            
            <!-- You can add more sections here -->
        </section>

        <div class="trust-banner glass-effect">
            <i class="fas fa-shield-alt p-3"></i>
            <div class="trust-text">
                <strong>We Value Your Trust</strong>
                <p>By using our website, you agree to the terms of this Privacy Policy. If you have any questions, please contact us.</p>
            </div>
        </div>
    </div>

    <!-- Right Sidebar Section -->
    <aside class="sidebar">
        <div class="side-card m-5 glass-effect">
            <h4><i class="fas fa-link"></i> Quick Links</h4>
            <ul class="quick-links-list">
                <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="/about"><i class="fas fa-info-circle"></i> About Us</a></li>
                <li><a href="#"><i class="fas fa-shield-virus"></i> Fraud Monitoring</a></li>
                <li><a href="#"><i class="fas fa-graduation-cap"></i> Cyber Training</a></li>
                <li><a href="#"><i class="fas fa-user-tie"></i> Consulting Services</a></li>
            </ul>
        </div>

        <div class="side-card glass-effect priority-card">
            <div class="shield-container">
                <i class="fas fa-user-shield"></i>
            </div>
            <h4 class="txt-light">Your Security is Our Priority</h4>
            <p class="txt-light">We are committed to protecting your personal information.</p>
        </div>
    </aside>
</main>
@endsection