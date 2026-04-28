@extends('layouts.app')

@section('content')

<!-- HERO -->
<section id="hero" class="about-hero">
    <div class="hero-overlay"></div>

    <div class="hero-cont text-center">
        <h1 class="hero-txt">ABOUT US</h1>
        <hr class="hero-line">
        <p class="hero-subtxt">FIGHTING CYBER CRIME & ONLINE FRAUD</p>
    </div>
</section>


{{-- WHO WE ARE --}}
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6 text-center">
                <img src="{{ asset('img/we-do.png') }}" class="img-fluid about-img">
            </div>

            <div class="col-md-6">
                <div class="glass-card">
                    <h2>Who We Are</h2>
                    <p>{{ $data['who_we_are'] }}</p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- MISSION --}}
<section class="mission-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="glass-card">
                    <h2>Our Mission</h2>
                    <p>{{ $data['mission'] }}</p>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <img src="{{ asset('img/mission.jpg') }}" class="img-fluid about-img">
            </div>

        </div>
    </div>
</section>


{{-- VISION --}}
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6 text-center">
                <img src="{{ asset('img/vision.jpg') }}" class="img-fluid about-img">
            </div>

            <div class="col-md-6">
                <div class="glass-card">
                    <h2>Our Vision</h2>
                    <p>{{ $data['vision'] }}</p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- WHY CHOOSE US --}}
<section class="why-us py-5 text-center">
    <div class="container">
        <h2 class="mb-5">Why Choose Us?</h2>

        <div class="row">

            <div class="col-md-4">
                <div class="glass-card why-card">
                    <i class="fas fa-shield-alt icon"></i>
                    <h4>Expertise</h4>
                    <p>Trusted Cybercrime Professionals</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card why-card">
                    <i class="fas fa-search icon"></i>
                    <h4>Investigations</h4>
                    <p>In-depth Scam Analysis</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card why-card">
                    <i class="fas fa-handshake icon"></i>
                    <h4>Awareness</h4>
                    <p>Commitment to Your Safety</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection