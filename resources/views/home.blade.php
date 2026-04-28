@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section id="hero" class="position-relative home">

    <!-- IMAGE  -->
    <img src="{{ asset('img/home-hero.jpeg') }}" class="w-100" alt="hero">
    <!-- TEXT OVER IMAGE -->
    <div class=" hero-content  position-absolute top-40 m-5 s-0 translate-middle-y text-white ps-5">
        <h1 class="hero-title ">Stay Safe from Cyber Fraud!</h1>
        <br>
        <p class="hero-subtitle">Protect yourself from phishing, identity theft, and online scams.</p>
        <br>
        <div class="hero-buttons">
  <a href="#cybercrime" class="btn btn-primary m-2">Get Started</a>
  <a href="#services" class="btn btn-outline-light text-center m-2">Learn More</a>
</div>

    <br>
</div>
</section>

<section id="cards" class="bg-navyblue">
<div class="container p-5">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-4 delay-1">
      <a href="/alerts" class="card-box ">
                <div class="icon-blue">🔔</div>
                <div>
                    <div class="title">Real-Time Alerts</div>
                    <div class="desc">Receive instant fraud alerts and stay informed.</div>
                </div>
            </a>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4  dealy-2">
             <a href="/tips" class="card-box ">
                <div class="icon-green">🛡️</div>
                <div>
                    <div class="title">Fraud Protection Tips</div>
                    <div class="desc">Learn how to safeguard your personal information.</div>
                </div>
            </a>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4  delay-3">
          <a href="/report"  class="card-box ">
                <div class="icon-orange">⚠️</div>
                <div>
                    <div class="title">Report a Scam</div>
                    <div class="desc">Quickly report suspicious activity online.</div>
                </div>
            </a>
        </div>

    </div>
    <br>
</div>
</section>

<section id="cybercrime" class="threats border-bottom border-top border-gray bg-navyblue ">
            <span class="lines"></span>
 <h2 class="txt-navy m-3 text-center" >COMMON CYBER THREATS</h2>
         <span class="lines"></span>
 <div class="card-grid">

  <!-- CARD 1 -->
  <a href="/phishing" class="threat-card ">
   <div class="img-box img-zoom">
    <img src="{{ asset('img/phishing.jpg') }}" class="w-100" alt="hero">
   </div>
   <div class="content">
    <h3 class="txt-navy text-center">Phishing Attacks</h3>
    <p class="text-center">Beware of fake emails & links</p>
   </div>
  </a>

  <!-- CARD 2 -->
  <a href="/identity" class="threat-card ">
   <div class="img-box img-zoom">
    <img src="{{ asset('img/Id-card.jpg') }}" class="w-100" alt="hero">
   </div>
   <div class="content">
    <h3 class="txt-navy text-center">Identity Theft</h3>
    <p class="text-center">Protect your personal data</p>
   </div>
  </a>

  <!-- CARD 3 -->
  <a href="/payment" class="threat-card ">
   <div class="img-box img-zoom">
        <img src="{{ asset('img/Payment.jpg') }}" class="w-100" alt="hero">

   </div>
   <div class="content">
    <h3 class="txt-navy text-center">Payment Frauds</h3>
    <p class="text-center">Secure your online transactions</p>
   </div>
</a>
  <!-- CARD 4 -->
  <a href="/social" class="threat-card ">
   <div class="img-box img-zoom">
        <img src="{{ asset('img/social.jpg') }}" class="w-100" alt="hero">
   </div>
   <div class="content">
    <h3 class="txt-navy text-center">Social Engineering</h3>
    <p class="text-center">Watch out for manipulation tactics</p>
   </div>
  </a>

 </div><br>
</section>
<section id="services" class="threats border-bottom border-top border-gray bg-navyblue ">
            <span class="lines"></span>
 <h2 class="txt-navy text-center m-3 p-3" >OUR KEY SERVICES</h2>
         <span class="lines"></span>
 <div class="card-grid">

  <!-- CARD 1 -->
  <a href="/fraud" class="threat-card ">
   <div class="img-box img-zoom">
    <img src="{{ asset('img/detection.jpg') }}" class="w-100 h-100" alt="hero">
   </div>
   <div class="content">
    <h3 class="txt-navy text-center">Fraud Monitoring</h3>
    <p class="text-center">24/7 Threat Detection</p>
   </div>
  </a>

  <!-- CARD 2 -->
  <a href="/security" class="threat-card ">
   <div class="img-box img-zoom">
    <img src="{{ asset('img/cyber.jpg') }}" class="w-100" alt="hero">
   </div>
   <div class="content">
    <h3 class="txt-navy text-center">Cyber Security Training</h3>
    <p class="text-center">Learn to Defend Against Scams</p>
   </div>
  </a>

  <!-- CARD 3 -->
  <a href="/consulting" class="threat-card ">
   <div class="img-box img-zoom">
        <img src="{{ asset('img/CyberSecurity-Consulting.png') }}" class="w-100" alt="hero">

   </div>
   <div class="content">
    <h3 class="txt-navy text-center">Consulting Services</h3>
    <p class="text-center">Expert Fraud Prevention Solutions</p>
   </div>
</a><br>

</section>
<section class="news p-5">
        <div class="container  ">
                    <span class="lines"></span>
            <h2 class="section-titless txt-navyblue text-center">LATEST NEWS & UPDATES</h2>
                    <span class="lines"></span>
            <div class="news-grid">
                <!--Card 1 -->
           <div class="news-card fade-left "> 
                               <br>
                    <div class="news-content">
                        <h3>How To Spot Phishing Scams</h3>
                        <span class="txt-grey">April 6, 2026</span>
                        <p>Explore the latest trends in cyber security and how they will impact your digital safety in the upcoming year.</p>
                        <button class="btn btn-secondary">Read Article →</button>
                        <br>
                    </div>
                </div>

                <!--Card 2 -->
          <div class="news-card  fade-up ">
                                <br>
                    <div class="news-content">
                        <h3>Top 5 Online Fraud Tactics</h3>
                         <span class="txt-grey">March 28, 2026</span>
                        <p>Learn the telltale signs of phishing and email scams, and discover effective strategies to protect yourself.</p>
                        <button class="btn btn-secondary">Read Article → </button>
                        <br>
                    </div>
                </div>
                   <!--Card 3 -->
<div class="scam-card  fade-right">
        <h2>Have You Been Scammed?</h2>
    <hr>
    <p class="subtitle txt-light">Get Help Now!</p>

 <a href="/identity" " class="cta-btn">How It Works</a>
    <div class="support-text">
        🛡️ Report Fraud & Get Support!
    </div>
</div>
                
            </div>
        </div>
</section>

@endsection