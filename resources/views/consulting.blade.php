@extends('layouts.app')

@section('content')
<section class="hero-sec-tion">

    <div class="hero-con-tent">
        <h1>
            Expert Fraud <br>
            Prevention <span>Solutions</span>
        </h1>

        <div class="lines"></div>

        <p>
            We provide expert consultancy to help organizations detect, prevent and respond to fraud effectively.
            Our services include fraud detection strategies, awareness campaigns, cyber audits, risk assessments,
            and incident response planning.
        </p>

        <div class="hero-fea-tures">

            <div class="fea-ture">
                <i class="fas fa-shield-alt"></i>
                <div>
                    <h4>Trusted Experts</h4>
                    <span>Industry-leading professionals</span>
                </div>
            </div>

            <div class="fea-ture">
                <i class="fas fa-chart-line"></i>
                <div>
                    <h4>Proven Approach</h4>
                    <span>Data-driven strategies that deliver results</span>
                </div>
            </div>

            <div class="fea-ture">
                <i class="fas fa-user-shield"></i>
                <div>
                    <h4>End-to-End Support</h4>
                    <span>From prevention to incident response</span>
                </div>
            </div>

        </div>
    </div>

</div>
</section>
<section id="consult-sec2" class="cons-sec2 mt-0 pt-0">
<div class="services-section">

    <h2>Our Expert Services</h2>
    <p class="subtitle">
        Comprehensive solutions to strengthen your organization's security posture and prevent fraud.
    </p>

    <div class="services-grid">

        <!-- CARD 1 -->
        <div class="service-card">
            <div class="ic-on"><i class="fas fa-clipboard-check"></i></div>
            <h3>Corporate Cyber Audit</h3>
            <p>Identify vulnerabilities and strengthen your security infrastructure.</p>

            <ul>
                <li>Security gap analysis</li>
                <li>Policy & compliance review</li>
                <li>Detailed audit reports</li>
                <li>Actionable recommendations</li>
            </ul>

            <a href="#" class="learn">Learn More →</a>
        </div>

        <!-- CARD 2 -->
        <div class="service-card">
            <div class="ic-on"><i class="fas fa-chalkboard-teacher"></i></div>
            <h3>Employee Awareness Workshops</h3>
            <p>Empower your employees with the right knowledge to recognize and avoid threats.</p>

            <ul>
                <li>Interactive training sessions</li>
                <li>Phishing & social engineering</li>
                <li>Best practices for safe use</li>
                <li>Customizable programs</li>
            </ul>

            <a href="#" class="learn">Learn More →</a>
        </div>

        <!-- CARD 3 -->
        <div class="service-card">
            <div class="ic-on"><i class="fas fa-search"></i></div>
            <h3>Fraud Risk Assessment</h3>
            <p>Assess potential risks and vulnerabilities to stay ahead of fraud threats.</p>

            <ul>
                <li>Risk identification</li>
                <li>Impact analysis</li>
                <li>Risk scoring & reporting</li>
                <li>Mitigation strategies</li>
            </ul>

            <a href="#" class="learn">Learn More →</a>
        </div>

        <!-- CARD 4 -->
        <div class="service-card">
            <div class="ic-on"><i class="fas fa-headset"></i></div>
            <h3>Incident Response Consulting</h3>
            <p>Respond swiftly and effectively to security incidents and minimize damage.</p>

            <ul>
                <li>Incident handling guidance</li>
                <li>Response strategy</li>
                <li>Forensic support</li>
                <li>Recovery planning</li>
            </ul>

            <a href="#" class="learn">Learn More →</a>
        </div>

    </div>

</div>
<div class="section-one">
        <div class="banner-box">
            <div class="banner-left">
                <div class="iconn">
                    <i class="fas fa-shield-alt"></i>
                </div>

                <div>
                    <h2>Let’s Build a Safer Future Together</h2>
                    <p class="txt-light">
                        Partner with us to protect your organization, reduce risks,
                        and create a culture of security and awareness.
                    </p>
                </div>
            </div>

            <div class="banner-right">
                <a href="#" class="consult-btn">
                    <i class="fas fa-calendar-alt"></i>
                    Book a Consultation
                </a>
                <p class="txt-light">Schedule a meeting with our experts and get tailored solutions.</p>
            </div>
        </div>
    </div>


    <!-- SECTION 2 -->
    <div class="section-two p-5">
        <div class="stats-box">

            <div class="stat">
                <i class="fas fa-check-circle"></i>
                <span class="txt-light">100+ Organizations Secured</span>
            </div>

            <div class="stat">
                <i class="fas fa-award"></i>
                <span class="txt-light">10+ Years of Expertise</span>
            </div>

            <div class="stat">
                <i class="fas fa-headset"></i>
                <span class="txt-light">End-to-End Security Support</span>
            </div>

            <div class="stat">
                <i class="fas fa-lock"></i>
                <span class="txt-light">Confidential & Trusted</span>
            </div>

        </div>
    </div>
</section>
@endsection
