@extends('layouts.app')

@section('content')

<!-- 🔷 HERO SECTION -->
<section class="hero-section">

    <img src="{{ asset('img/phish-img.png') }}" class="hero-img">

    <div class="hero-content">
        <span class="badge-pill">PHISHING AWARENESS</span>

        <h1 class="hero-title">
            Phishing Attack <br>
            <span>Awareness</span>
        </h1>

        <p class="txt-light">
            Phishing is a cyber attack where hackers trick you into revealing sensitive
            information like passwords, bank details, or OTPs through fake emails,
            links, or websites.
        </p>
    </div>

</section>

<!-- 🔷 PHISHING SECTION -->
<section class="phishing-section">
    <div class="phishing-container">

        <h2 class="phishing-title">
            How <span>Phishing</span> Attacks Look Like
        </h2>

        <div class="phishing-grid">

            <!-- Card 1 -->
            <div class="phishing-card">
                <div class="alert-icon">!</div>

                <div class="mail-box">
                    <div class="mail-head">
                        <p>From: support@paypal.com</p>
                        <p>To: You</p>
                        <p>Subject: Urgent: Verify Your Account</p>
                    </div>

                    <div class="mail-body">
                        <h3>PayPal</h3>
                        <p>Dear Customer,</p>
                        <p>Your account has been limited.</p>
                        <p>Please verify your account now to avoid suspension.</p>

                        <button>Verify Now</button>

                        <div class="fake-link">
                            http://secure-paypal.com.verify.login
                        </div>
                    </div>
                </div>

                <div class="card-bottom">
                    <h3 class="card-red">Fake Email</h3>
                    <p>Looks real but links to fake websites.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="phishing-card">
                <div class="alert-icon">!</div>

                <div class="chat-box">
                    <div class="chat-head">🏦 Your Bank</div>
                    <div class="chat-msg">
                        Your account is locked.<br>
                        Click the link below to verify your identity.
                        <br><br>
                        <span>http://bit.ly/securelogin</span>
                    </div>
                </div>

                <div class="card-bottom">
                    <h3 class="card-red">Suspicious Links</h3>
                    <p>Shortened or hidden links can steal your data.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="phishing-card">
                <div class="alert-icon">!</div>

                <div class="login-box">
                    <div class="browser-bar">
                        🔒 http://secure-login.verify.com
                    </div>

                    <div class="login-form">
                        <form action="/login" method="POST">
                            @csrf
                            <h3>Sign In</h3>
                            <p>Enter your credentials to continue</p>

                            <input type="text" name="email" placeholder="Username or Email">
                            <input type="password" name="password" placeholder="Password">
                            <button type="submit">Sign In</button>
                        </form>
                    </div>
                </div>

                <div class="card-bottom">
                    <h3 class="card-red">Fake Websites</h3>
                    <p>Designed to look exactly like real login pages.</p>
                </div>
            </div>

        </div>
    </div>

<!--  PROTECTION -->
<h2 class="section-titles mt-5">How to <span> Protect </span>Yourself</h2>

<div class="container card-row">

    <div class="protect-card">
        <div class="icon-circle"><i class="fa-solid fa-link-slash"></i></div>
        <h4>Don't Click Suspicious Links</h4>
        <p class="txt-light">Avoids clicking on links in emails or messages from unknown senders.</p>
    </div>

    <div class="protect-card">
        <div class="icon-circle"><i class="fa-solid fa-envelope-circle-check"></i></div>
        <h4>Verify Sender Email</h4>
        <p class="txt-light">Always check the sender's email address carefully before responding.</p>
    </div>

    <div class="protect-card">
        <div class="icon-circle"><i class="fa-solid fa-filter"></i></div>
        <pre></pre>
        <h4>Use Spam Filters</h4>
        <pre></pre>
        <p class="txt-light">Keep spam filters enabled and report suspicious emails.</p>
    </div>

    <div class="protect-card">
        <div class="icon-circle"><i class="fa-solid fa-flag"></i></div>
        <h4>Report Phishing Attempts</h4>
        <p class="txt-light">Report 
            phishing emails to help protect other from fraud.</p>
    </div>

</div>


<!-- 🔷 CTA -->
<div class="container mt-5">
    <div class="cta-box items-center">

        <div class="cta-left">
            <div class="cta-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
        </div>

        <div class="cta-right">
            <h2 >Stay Alert. Stay Safe.</h2>
            <p class="txt-light">
                Phishing attacks are getting smarter.
                Awareness is your best protection.
            </p>

            <a href="/report" class="btn btn-danger">Report Fraud</a>
            <a href="/alerts" class="btn btn-primary">Latest Alerts</a>
        </div>

    </div>
</div>

</section>

@endsection