@extends('layouts.app')

@section('content')

<!--  HERO / BANNER -->
<section class="alerts-banner">
    <div class="banner-content">
        <h1>🚨 Latest Fraud Alerts</h1>
        <br>
        <p class="txt-light">Stay updated with recent cyber fraud activities</p>
    </div>
</section>


<!--  SEARCH + FILTER -->
<section class="alerts-controls container mt-4">
    <div class="row g-3">
        <div class="col-md-6">
            <input type="text" id="searchAlert" class="form-control" placeholder="Search alerts...">
        </div>

        <div class="col-md-6">
            <select id="filterType" class="form-control">
                <option value="all">All Types</option>
                <option value="bank">Bank Fraud</option>
                <option value="upi">UPI Fraud</option>
                <option value="job">Job Scam</option>
            </select>
        </div>
    </div>
</section>


<!--  ALERT CARDS -->
<section class="alerts-list container mt-4 mb-5">
    <div class="row g-4" id="alertContainer">

        <!-- BANK -->
        <div class="col-md-4 alert-item bank">
            <div class="alert-card bank-card fade-up">
                <span class="badge bg-danger mb-2">High Risk</span>
                <pre></pre>
                <h4>Fake Bank Call Scam</h4>
                <p>Scammers pretend to be bank officials asking for OTP.</p>
                <div class="meta">📅 April 10, 2026</div>
            </div>
        </div>

        <!-- UPI -->
        <div class="col-md-4 alert-item upi">
            <div class="alert-card upi-card fade-up delay-1">
                <span class="badge bg-warning text-dark mb-2">Medium Risk</span>
                <pre></pre>
                <h4>UPI Request Fraud</h4>
                <p>Never approve unknown payment requests.</p>
                <pre></pre>
                <div class="meta">📅 April 5, 2026</div>
            </div>
        </div>

        <!-- JOB -->
        <div class="col-md-4 alert-item job">
            <div class="alert-card job-card fade-up delay-2">
                <span class="badge bg-info text-dark mb-2">New</span>
                <pre></pre>
                <h4>Fake Job Offer Emails</h4>
                <p>Fraud emails asking for registration fees.</p>
                <pre></pre>
                <div class="meta">📅 March 30, 2026</div>
            </div>
        </div>

    </div>

    <!--  NO RESULT -->
    <div id="noResult" class="text-center mt-4 text-danger fw-bold" style="display:none;">
         No alerts found
    </div>
</section>


@endsection