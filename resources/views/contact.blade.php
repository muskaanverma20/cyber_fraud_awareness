@extends('layouts.app')

@section('content')

<section id="contant">

    <div class="overlay-box">

        <!-- LEFT FORM -->
        <div class="contact-form">

            <div>

                <h1>Contact Us</h1>

                <p class="txt-light">

                    Get in touch with us for any questions
                    or assistance.

                </p>


                {{-- SUCCESS MESSAGE --}}
                @if(session('success'))

                    <div style="color:green; margin-bottom:15px;">

                        {{ session('success') }}

                    </div>

                @endif


                {{-- VALIDATION ERRORS --}}
                @if($errors->any())

                    <div style="color:red; margin-bottom:15px;">

                        <ul>

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif



                <!-- CONTACT FORM -->
                <form class="contact-form2"
                      method="POST"
                      action="{{ route('contact.store') }}">

                    @csrf


                    <!-- NAME -->
                    <label for="name">

                        Full Name

                    </label>

                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Enter your name"
                        value="{{ old('name') }}"
                        required>


                    <!-- EMAIL -->
                    <label for="email">

                        Email Address

                    </label>

                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Enter your email"
                        value="{{ old('email') }}"
                        required>


                    <!-- SUBJECT -->
                    <label for="subject">

                        Subject

                    </label>

                    <input
                        id="subject"
                        name="subject"
                        type="text"
                        placeholder="Enter subject"
                        value="{{ old('subject') }}"
                        required>


                    <!-- MESSAGE -->
                    <label for="message">

                        Message

                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        placeholder="Write your message..."
                        required>{{ old('message') }}</textarea>


                    <!-- BUTTON -->
                    <button type="submit"
                            class="send-btn">

                        Send Message

                    </button>

                </form>

            </div>

        </div>



        <!-- RIGHT INFO -->
        <div class="contact-form1">

            <div>

                <h1>Contact Info</h1>

                <br>


                <!-- ADDRESS -->
                <div class="info-item ps-5">

                    <span>📍</span>

                    <div>

                        <strong>Address</strong>

                        <br>

                        <a href="https://maps.google.com/?q=Indian+Cyber+Crime+Coordination+Centre+New+Delhi"
                           target="_blank">

                            Indian Cyber Crime Coordination Centre (I4C)
                            <br>
                            New Delhi, India

                        </a>

                    </div>

                </div>


                <br>


                <!-- HELPLINE -->
                <div class="info-item ps-5">

                    <span>📞</span>

                    <div>

                        <strong>Cyber Crime Helpline</strong>

                        <br>

                        <a href="tel:1930">

                            1930

                        </a>

                    </div>

                </div>


                <br>


                <!-- EMAIL -->
                <div class="info-item ps-5">

                    <span>✉️</span>

                    <div>

                        <strong>Email</strong>

                        <br>

                        <a href="mailto:support@cybercrime.gov.in">

                            support@cybercrime.gov.in

                        </a>

                    </div>

                </div>


                <br>


                <!-- WEBSITE -->
                <div class="info-item ps-5">

                    <span>🌐</span>

                    <div>

                        <strong>Official Portal</strong>

                        <br>

                        <a href="https://cybercrime.gov.in"
                           target="_blank">

                            cybercrime.gov.in

                        </a>

                    </div>

                </div>


                <br>


                <!-- SOCIAL ICONS -->
                <div class="social-icons1 ps-5">


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


                    <!-- YOUTUBE -->
                    <a href="https://www.youtube.com/@CyberDostI4C"
                       target="_blank">

                        <i class="fab fa-youtube txt-light"></i>

                    </a>


                    <!-- OFFICIAL WEBSITE -->
                    <a href="https://cybercrime.gov.in"
                       target="_blank">

                        <i class="fas fa-globe txt-light"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection