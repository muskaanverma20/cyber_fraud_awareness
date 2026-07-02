<footer class="footer reveal">

    <div class="container">

        <!-- TOP GRID -->
        <div class="footer-grid stagger">


            <!-- BRAND -->
            <div class="footer-col slide-right">

                <h2 class="logo fade-in">

                    CyberShield

                </h2>

                <p class="fade-in">

                    Cyber fraud awareness platform providing
                    security tips, fraud reporting and
                    real-time alerts.

                </p>


                <!-- SOCIAL ICONS -->
                <div class="socials zoom-in">


                    <!-- FACEBOOK -->
                    <a href="https://www.facebook.com/cyberdostI4C"
                       target="_blank">

                        <i class="fab fa-facebook-f txt-light"></i>

                    </a>


                    <!-- TWITTER -->
                    <a href="https://twitter.com/CyberDost"
                       target="_blank">

                        <i class="fab fa-twitter txt-light"></i>

                    </a>


                    <!-- LINKEDIN -->
                    <a href="https://www.linkedin.com/company/indian-cyber-crime-coordination-centre/"
                       target="_blank">

                        <i class="fab fa-linkedin-in txt-light"></i>

                    </a>


                    <!-- INSTAGRAM -->
                    <a href="https://www.instagram.com/cyberdost.i4c/"
                       target="_blank">

                        <i class="fab fa-instagram txt-light"></i>

                    </a>

<br>
                    <!-- YOUTUBE -->
                    <a href="https://www.youtube.com/@CyberDostI4C"
                       target="_blank">

                        <i class="fab fa-youtube txt-light"></i>

                    </a>


                    <!-- CYBER CRIME PORTAL -->
                    <a href="https://cybercrime.gov.in/"
                       target="_blank"
                       title="National Cyber Crime Portal">

                        <i class="fas fa-shield-alt txt-light"></i>

                    </a>

                </div>

            </div>



            <!-- COMPANY -->
            <div class="footer-col fade-in">

                <h3>Company</h3>

                <ul>

                    <li>

                        <a href="{{ url('/about') }}"
                           class="footer-link">

                            About Us

                        </a>

                    </li>

                    <li>

                        <a href="{{ url('/teams') }}"
                           class="footer-link">

                            Our Team

                        </a>

                    </li>

                    <li>

                        <a href="#"
                           class="footer-link">

                            Careers

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('contact') }}"
                           class="footer-link">

                            Contact Us

                        </a>

                    </li>

                </ul>

            </div>



            <!-- SERVICES -->
            <div class="footer-col fade-in">

                <h3>Services</h3>

                <ul>

                    <li>

                        <a href="{{ route('report') }}"
                           class="footer-link">

                            Report Fraud

                        </a>

                    </li>

                    <li>

                        <a href="{{ url('/alerts') }}"
                           class="footer-link">

                            Live Alerts

                        </a>

                    </li>

                    <li>

                        <a href="{{ url('/security') }}"
                           class="footer-link">

                            Cyber Training

                        </a>

                    </li>

                    <li>

                        <a href="{{ url('/fraud') }}"
                           class="footer-link">

                            Fraud Monitoring

                        </a>

                    </li>

                </ul>

            </div>



            <!-- RESOURCES -->
            <div class="footer-col fade-in">

                <h3>Resources</h3>

                <ul>

                    <li>

                        <a href="{{ url('/tips') }}"
                           class="footer-link">

                            Safety Tips

                        </a>

                    </li>

                    <li>

                        <a href="#"
                           class="footer-link">

                            Blog

                        </a>

                    </li>

                    <li>

                        <a href="#"
                           class="footer-link">

                            Case Studies

                        </a>

                    </li>

                    <li>

                        <a href="#"
                           class="footer-link">

                            FAQs

                        </a>

                    </li>

                </ul>

            </div>



            <!-- NEWSLETTER -->
            <div class="footer-col slide-left">

                <h3>Subscribe</h3>

                <p>

                    Get latest cyber fraud alerts directly
                    in your inbox

                </p>


                <!-- SUCCESS MESSAGE -->
                @if(session('success'))

                    <div style="color:#00ff88; margin-bottom:10px;">

                        {{ session('success') }}

                    </div>

                @endif


                <!-- ERROR MESSAGE -->
                @if($errors->any())

                    <div style="color:#ff4d4d; margin-bottom:10px;">

                        {{ $errors->first() }}

                    </div>

                @endif


                <!-- FORM -->
                <form class="newsletter zoom-in"
                      method="POST"
                      action="{{ route('newsletter.subscribe') }}">

                    @csrf

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        required>

                    <button type="submit">

                        →

                    </button>

                </form>


                <!-- CONTACT -->
                <div class="contact fade-in">

                    <p>

                        📞 Helpline: 1930 (Cyber Crime)

                    </p>

                    <p>

                        📧 {{ config('mail.from.address') }}

                    </p>

                </div>

            </div>

        </div>



        <!-- WARNING -->
        <div class="footer-middle fade-in">

            <p class="txt-light">

                ⚠️ Never share OTP, PIN, CVV or banking details
                with anyone. Cyber fraud awareness is your
                first protection.

            </p>

        </div>



        <!-- FOOTER BOTTOM -->
        <div class="footer-bottom fade-in">


            <!-- LEFT -->
            <div class="left">

                © {{ date('Y') }} CyberShield.
                All rights reserved.

            </div>


            <!-- CENTER -->
            <div class="center">

                <a href="{{ url('/privacy') }}"
                   class="footer-link">

                    Privacy Policy

                </a>

                <a href="{{ url('/terms') }}"
                   class="footer-link">

                    Terms & Conditions

                </a>

                <a href="#"
                   class="footer-link">

                    Cookies

                </a>

            </div>


            <!-- RIGHT -->
            <div class="right">

                Designed for Cyber Security Awareness Project

            </div>

        </div>

    </div>

</footer>