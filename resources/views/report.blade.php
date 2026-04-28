@extends('layouts.app')

@section('content')
<div class="body">
<!-- HERO SECTION -->
<section id="hero" class="position-relative h-50">

    <!-- IMAGE  -->
    <img src="{{ asset('img/report-img_cleanup.png') }}" class="h-25 w-100" alt="hero">
    <!-- TEXT OVER IMAGE -->
    <div class=" hero-content position-absolute top-40 m-5 s-0 translate-middle-y text-white ps-5">
        <h1 class="hero-title fw-bold">Report Cyber Fraud</h1>
        <br>
        <h2 class="hero-subtext ">Spot a Scam ? Report It Here!</h2>
        <br>
        <p class="hero-subtitle ">Fill out the form below to report cyber fraud , scams or suspicious online activities. Help us make the the digital wo rid safer for everyone. </p>
    <br>
</div>
</section>

<section class="report-section">
<div class="report-container">

    <h2>Report Cyber Fraud Form</h2>

    <form action="{{ route('submit.report') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- ROW 1 -->
        <div class="form-row1">
            <div class="form-group1">
                <label>Full Name</label>
                <input type="text" name="first_name" placeholder="First">
            </div>
<br>
            <div class="form-group1">
                <label>Last Name</label>
                <input type="text" name="last_name" placeholder="Last">
            </div>
        </div>

        <!-- ROW 2 -->
        <div class="form-row1">
            <div class="form-group1">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="name@email.com">
            </div>
<br>
            <div class="form-group1">
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="+91 12345 67890">
            </div>
        </div>

        <!-- ROW 3 -->
        <div class="form-row1">
            <div class="form-group1">
                <label>Fraud Type</label>
                <select name="fraud_type">
                    <option>Phishing Scam</option>
                    <option>Online Fraud</option>
                </select>
                <br>
                 <!-- FILE UPLOAD -->
        <div class="form-group1">
            <label>Upload Evidence</label>
            <input type="file" name="evidence">
            <small class="hint">Attach screenshots, emails, or documents (Max 10MB)</small>
        </div>

     
            </div>
<br>
            <div class="form-group1">
                <label>Description of Incident</label>
                <textarea name="description" id="desc" maxlength="1000" placeholder="Please describe the fraudulent activity in detail..."></textarea>
                
                <!-- CHARACTER COUNT -->
                <small id="charCount">0 / 1000</small>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="form-footer">

            <!-- CONSENT -->
            <div class="consent">
                <input type="checkbox" required>
                <label>
                    I consent to having this website collect my details and agree to the 
                    <span class="link">Privacy Policy</span>
                </label>
            </div>

            <!-- BUTTON -->
            <button type="submit" class="submit-btn">Submit Report</button>

        </div>

    </form>

</div>
</section>
<section class="support-section">

<div class="top-cards">

    <!-- CARD 1 -->
    <div class="info-card">
        <div class="info-flex">
            <div class="icon-box">
                <i class="fas fa-shield-alt"></i>
            </div>
            <div>
                <h3>Why Reporting Matters</h3>
                <p>
                    Your report helps us fight cybercrime by identifying and tracking 
                    new threats, protecting others from falling victim to similar scams.
                </p>
            </div>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="info-card">
        <div class="info-flex">
            <div class="icon-box">
                <i class="fas fa-lock"></i>
            </div>
            <div>
                <h3>Stay Safe Online</h3>
                <p >
                    Regularly update passwords, enable two-factor authentication,
                    and be cautious of suspicious links and attachments.
                </p>
            </div>
        </div>
    </div>

</div>
<div class="support-box">

    <!-- IMAGE (FULL WIDTH BACKGROUND) -->
    <div class="support-img">
        <img src="{{ asset('img/tech-removebg-preview.png') }}" alt="support">
        
        <!-- OVERLAY TEXT -->
        <div class="support-overlay">
            <h2 class="p-3 txt-navy">Get Help & Support</h2>

            <div class="buttons">
                <a href="{{ route('contact') }}" class="btn-primary">Contact Us</a>
                <a href="#" class="btn-light">Visit Help Center</a>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE BOX -->
    <div class="support-right">
        <h3>Need Immediate Assistance?</h3>
        <p class="call">Call Us:</p>
        <h2>1800-123-4567</h2>

        <button class="call-btn">Call Now</button>

        <p class="small txt-light">📞 Report Fraud & Get Support</p>
    </div>

</div>
</section>
</div>

<!-- JS FOR COUNTER -->
<script>
document.getElementById("desc").addEventListener("input", function() {
    document.getElementById("charCount").innerText = this.value.length + " / 1000";
});
</script>

@endsection