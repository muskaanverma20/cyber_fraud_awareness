{{-- resources/views/report.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="body">

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))

        <div class="alert alert-success text-center m-3">

            <h4>
                {{ session('success') }}
            </h4>

            <p>
                <strong>
                    Complaint ID:
                    {{ session('complaint_id') }}
                </strong>
            </p>

        </div>

    @endif


    {{-- VALIDATION ERRORS --}}
    @if($errors->any())

        <div class="alert alert-danger m-3">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif



    <!-- HERO SECTION -->
    <section id="hero" class="position-relative h-50">

        <!-- IMAGE -->
        <img src="{{ asset('img/report-img_cleanup.png') }}"
             class="hero-image w-100"
             alt="hero">

        <!-- TEXT -->
        <div class="hero-content position-absolute top-50 start-0 translate-middle-y text-white ps-5">

            <h1 class="hero-title fw-bold">
                Report Cyber Fraud
            </h1>

            <br>

            <h2 class="hero-subtext">
                Spot a Scam ? Report It Here!
            </h2>

            <br>

            <p class="hero-subtitle">

                Fill out the form below to report cyber fraud,
                scams or suspicious online activities.

                Help us make the digital world safer
                for everyone.

            </p>

        </div>

    </section>



    <!-- REPORT FORM -->
    <section class="report-section">

        <div class="report-container">

            <h2>
                Report Cyber Fraud Form
            </h2>

            <form action="{{ route('submit.report') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- ROW 1 -->
                <div class="form-row1">

                    <!-- FIRST NAME -->
                    <div class="form-group1">

                        <label>
                            First Name
                        </label>

                        <input type="text"
                               name="first_name"
                               value="{{ old('first_name') }}"
                               placeholder="First Name"
                               required>

                    </div>


                    <!-- LAST NAME -->
                    <div class="form-group1">

                        <label>
                            Last Name
                        </label>

                        <input type="text"
                               name="last_name"
                               value="{{ old('last_name') }}"
                               placeholder="Last Name"
                               required>

                    </div>

                </div>



                <!-- ROW 2 -->
                <div class="form-row1">

                    <!-- EMAIL -->
                    <div class="form-group1">

                        <label>
                            Email Address
                        </label>

                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="name@email.com"
                               required>

                    </div>


                    <!-- PHONE -->
                    <div class="form-group1">

                        <label>
                            Phone Number
                        </label>

                        <input type="text"
                               name="phone"
                               value="{{ old('phone') }}"
                               placeholder="+91 9876543210"
                                 maxlength="10"
                                pattern="[6-9][0-9]{9}"
                               oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,10)"
                                required>

                                 <small id="phoneError"
                                 style="display:none;color:red;font-size:13px;margin-top:5px;">
                                  Please enter a valid 10-digit mobile number.
                                   </small>



                    </div>

                </div>



                <!-- FRAUD TYPE -->
                <div class="form-group1">

                    <label>
                        Fraud Type
                    </label>

                    <select name="fraud_type"
                            class="form-control"
                            required>

                        <option value="">
                            -- Select Fraud Type --
                        </option>

                        <option>Phishing Scam</option>

                        <option>Online Banking Fraud</option>

                        <option>UPI Payment Fraud</option>

                        <option>Credit Card Fraud</option>

                        <option>Debit Card Fraud</option>

                        <option>Identity Theft</option>

                        <option>Social Media Scam</option>

                        <option>OTP Scam</option>

                        <option>QR Code Scam</option>

                        <option>Fake Loan Scam</option>

                        <option>Job Fraud</option>

                        <option>Lottery Scam</option>

                        <option>Investment Scam</option>

                        <option>Crypto Currency Fraud</option>

                        <option>Insurance Fraud</option>

                        <option>E-Commerce Fraud</option>

                        <option>Online Shopping Scam</option>

                        <option>Fake Customer Care Scam</option>

                        <option>SIM Swap Fraud</option>

                        <option>Cyber Bullying</option>

                        <option>Ransomware Attack</option>

                        <option>Malware Attack</option>

                        <option>Data Breach</option>

                        <option>Email Spoofing</option>

                        <option>Tech Support Scam</option>

                        <option>ATM Fraud</option>

                        <option>KYC Update Scam</option>

                        <option>Fake APK / App Fraud</option>

                        <option>Remote Access Scam</option>

                        <option>Romance Scam</option>

                        <option>Business Email Compromise</option>

                        <option>Website Cloning Fraud</option>

                        <option>Cyber Stalking</option>

                        <option>Online Harassment</option>

                        <option>Gaming Fraud</option>

                        <option>Fake Donation Scam</option>

                        <option>Parcel / Courier Scam</option>

                        <option>Income Tax Scam</option>

                        <option>Electricity Bill Scam</option>

                        <option>Other Cyber Fraud</option>

                    </select>

                </div>



                <!-- DESCRIPTION -->
                <div class="form-group1">

                    <label>
                        Description of Incident
                    </label>

                    <textarea name="description"
                              id="desc"
                              maxlength="1000"
                              placeholder="Please describe the fraudulent activity in detail..."
                              required>{{ old('description') }}</textarea>

                    <!-- CHARACTER COUNT -->
                    <small id="charCount">
                        0 / 1000
                    </small>

                </div>



                <!-- EVIDENCE -->
                <div class="form-group1">

                    <label>
                        Upload Evidence
                    </label>

                    <input type="file"
                           name="evidence"
                           class="form-control">

                    <small class="hint">

                        Attach screenshots,
                        emails or documents
                        (Max 10MB)

                    </small>

                </div>



                <!-- FOOTER -->
                <div class="form-footer">

                    <!-- CONSENT -->
                    <div class="consent">

                        <input type="checkbox"
                               required>

                        <label>

                            I consent to having this website
                            collect my details and agree to the
                            <span class="link">
                                Privacy Policy
                            </span>

                        </label>

                    </div>


                    <!-- BUTTON -->
                    <button type="submit"
                            class="submit-btn">

                        Submit Report

                    </button>

                </div>

            </form>

        </div>

    </section>



    <!-- SUPPORT SECTION -->
    <section class="support-section">

        <div class="top-cards">

            <!-- CARD 1 -->
            <div class="info-card">

                <div class="info-flex">

                    <div class="icon-box">

                        <i class="fas fa-shield-alt"></i>

                    </div>

                    <div>

                        <h3>
                            Why Reporting Matters
                        </h3>

                        <p>

                            Your report helps us fight cybercrime
                            by identifying and tracking new threats,
                            protecting others from falling victim
                            to similar scams.

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

                        <h3>
                            Stay Safe Online
                        </h3>

                        <p>

                            Regularly update passwords,
                            enable two-factor authentication,
                            and be cautious of suspicious links
                            and attachments.

                        </p>

                    </div>

                </div>

            </div>

        </div>



        <!-- SUPPORT BOX -->
        <div class="support-box">

            <!-- IMAGE -->
            <div class="support-img">

                <img src="{{ asset('img/tech-removebg-preview.png') }}"
                     alt="support">

                <!-- OVERLAY -->
                <div class="support-overlay">

                    <h2 class="p-3 txt-navy">
                        Get Help & Support
                    </h2>

                    <div class="buttons">

                        <a href="{{ route('contact') }}"
                           class="btn-primary">

                            Contact Us

                        </a>

                        <a href="https://www.cybercrime.gov.in/"
   target="_blank"
   class="btn-light">

   Visit Help Center

</a>

                    </div>

                </div>

            </div>



            <!-- RIGHT BOX -->
            <div class="support-right">

                <h3>
                    Need Immediate Assistance?
                </h3>

                <p class="call text-blue ">
                    Call Us:
                </p>

                <h2>
                    1930
                </h2>

                <a href="tel:1930"
                   class="call-btn  text-decoration-none">

                    Call Now

                </a>

                <p class="small txt-light mt-3">

                    📞 Report Fraud & Get Support

                </p>

            </div>

        </div>

    </section>

</div>



<!-- CHARACTER COUNTER -->
<script>

// Character Counter
document.getElementById("desc").addEventListener("input", function () {

    document.getElementById("charCount").innerText =
        this.value.length + " / 1000";

});


// Phone Validation

const phone = document.getElementById("phone");
const phoneError = document.getElementById("phoneError");

// Sirf Number Allow
phone.addEventListener("input", function () {

    this.value = this.value.replace(/\D/g, "");

    // 10 digit se jyada type nahi hone dega
    if (this.value.length > 10) {
        this.value = this.value.slice(0, 10);
    }

    // Error Hide
    phoneError.style.display = "none";

});

// Input se bahar aane par check karega
phone.addEventListener("blur", function () {

    if (this.value.length != 10) {

        phoneError.style.display = "block";
        phone.style.border = "1px solid red";

    } else {

        phoneError.style.display = "none";
        phone.style.border = "1px solid green";

    }

});

// Form Submit Validation

document.querySelector("form").addEventListener("submit", function(e){

    if(phone.value.length != 10){

        e.preventDefault();

        phoneError.style.display = "block";

        phone.style.border = "1px solid red";

        phone.focus();

    }

});

</script>

@endsection