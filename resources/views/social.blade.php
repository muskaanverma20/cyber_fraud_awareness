
@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
<section id="hero" class="position-relative home">

    <!-- IMAGE  -->
    <img src="{{ asset('img/social-card.png') }}" class="w-100" alt="hero">
    <!-- TEXT OVER IMAGE -->
    <div class=" hero-content  position-absolute top-50 mt-5  s-0 translate-middle-y text-white ps-5">
        <h1 class="hero-title ">Social Engineering 
            Attacks
        </h1>
        <br>
       <h2 class="hero-subtext ">Mainpulation is the biggest weapon of fraudsters.</h2>
        <br>      
        <p class="hero-subtitle">Social engineering is the art of mainpulating people into revealing confidential information or performing actions that compromise security.</p>

    <br>
    <div class="trust-line d-flex align-items-start">
    <!-- Icon ab left mein rahega -->
    <div class="icon-box">
        <i class="fa-solid fa-shield-halved"></i>
    </div>
    
    <!-- Text ab right mein rahega -->
    <div class="text-box">
        <p class="mb-0">
            Hackers don’t just break systems, <br>
            <strong>they break trust.</strong>
        </p>
    </div>
</div>

</div>
</section>
<!-- SECTION 2: TYPES OF SOCIAL ENGINEERING -->
<section class="social-types-section position-relative py-5">
    <!-- Background Overlay for contrast -->
    <div class="bg-overlay"></div>

    <div class="container position-relative z-1">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="sec-title text-white">Types of Social Engineering</h2>
            <div class="title-line"></div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Card: Phishing -->
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="glass-card-soc card-blue">
                    <div class="icon-circle"><i class="fa-solid fa-fish txt-light"></i></div>
                    <h3>Phishing</h3>
                    <p class="txt-light">Fake emails and websites that trick you into sharing data.</p>
                </div>
            </div>

            <!-- Card: Pretexting -->
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="glass-card-soc card-pink">
                    <div class="icon-circle"><i class="fa-solid fa-user-secret txt-light"></i></div>
                    <h3>Pretexting</h3>
                    <p class="txt-light">Attackers pretend to be someone you trust to gain access.</p>
                </div>
            </div>

            <!-- Card: Baiting -->
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="glass-card-soc card-green">
                    <div class="icon-circle"><i class="fa-solid fa-gift txt-light"></i></div>
                    <h3>Baiting</h3>
                    <p class="txt-light">Using free gifts or downloads to lure victims into traps.</p>
                </div>
            </div>

            <!-- Card: Tailgating -->
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="glass-card-soc card-orange">
                    <div class="icon-circle"><i class="fa-solid fa-door-open txt-light"></i></div>
                    <h3>Tailgating</h3>
                    <p class="txt-light">Entering restricted areas by following someone authorized.</p>
                </div>
            </div>

            <!-- Card: Surveys -->
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="glass-card-soc card-purple">
                    <div class="icon-circle"><i class="fa-solid fa-clipboard-question txt-light"></i></div>
                    <h3>Surveys</h3>
                    <p class="txt-light">Using fake forms to collect your confidential information.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION 3: REAL-LIFE EXAMPLES -->
    <div class="container">
        <!-- Section Title -->
        <div class="text-center ">
            <h2 class="sec-title text-white pt-5">Real-Life Examples</h2>
            <div class="title-line"></div>
        </div>

        <div class="row g-4">
            <!-- Example 1: Fake IT Support -->
            <div class="col-lg-6">
                <div class="example-card card-blue-glow h-100">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="example-img-wrapper">
                                <img src="{{ asset('img/free.jpg') }}" alt="IT Scam" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="example-content">
                                <h3 class="text-blue">Fake IT Support Call</h3>
                                <p class="txt-light">An employee received a call from someone pretending to be IT support. The attacker asked for the password to "fix an issue" and gained access to the company system, leading to a major data breach.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Example 2: Free Movie Download -->
            <div class="col-lg-6">
                <div class="example-card card-red-glow h-100">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="example-img-wrapper">
                                <img src="{{ asset('img/call.webp') }}" alt="Movie Scam" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="example-content">
                                <h3 class="text-red">Free Movie Download</h3>
                                <p class="txt-light">A user clicked on a free movie download link from an unknown website. Malware was installed silently, and attackers stole personal data and banking details.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Protection Tips - ->

<!-- Main Glass Container -->
<div class="glass-protection-container">
    
    <!-- Title with Purple Glow Lines -->
    <div class="tips-header-row d-flex align-items-center justify-content-center mb-5">
        <span class="glow-line"></span>
        <h4 class="mx-3 text-white fw-bold m-0">Protection Tips</h4>
        <span class="glow-line"></span>
    </div>

    <div class="row g-0">
        <!-- Tip 1 -->
        <div class="col-lg-3 col-md-6 tip-item">
            <div class="tip-wrapper">
                <div class="t-icon i-blue"><i class="fa-solid fa-user-shield txt-light"></i></div>
                <div class="t-content">
                    <h6 class="text-blue fw-bold">Verify Identity</h6>
                    <p>Always verify the sender or caller before sharing any information.</p>
                </div>
            </div>
        </div>

        <!-- Tip 2 -->
        <div class="col-lg-3 col-md-6 tip-item v-divider">
            <div class="tip-wrapper">
                <div class="t-icon i-pink"><i class="fa-solid fa-link-slash txt-light"></i></div>
                <div class="t-content">
                    <h6 class="text-pink fw-bold">Don't Click Links</h6>
                    <p>Avoid clicking on suspicious links or downloading unknown attachments.</p>
                </div>
            </div>
        </div>

        <!-- Tip 3 -->
        <div class="col-lg-3 col-md-6 tip-item v-divider">
            <div class="tip-wrapper">
                <div class="t-icon i-green"><i class="fa-solid fa-bell txt-light"></i></div>
                <div class="t-content">
                    <h6 class="text-green fw-bold">Report Immediately</h6>
                    <p>Report any unusual requests or suspicious activity to your IT department.</p>
                </div>
            </div>
        </div>

        <!-- Tip 4 -->
        <div class="col-lg-3 col-md-6 tip-item v-divider">
            <div class="tip-wrapper">
                <div class="t-icon i-orange"><i class="fa-solid fa-users txt-light"></i></div>
                <div class="t-content">
                    <h6 class="text-orange fw-bold">Stay Educated</h6>
                    <p>Regularly train yourself and your team about social engineering tactics.</p>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
