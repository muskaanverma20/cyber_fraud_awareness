@extends('layouts.app')
@section('content')
<section id="contant">

    <div class="overlay-box">

        <!-- LEFT FORM -->
        <div class="contact-form">
            <div>
                <h1>Contact Us</h1>
                <p>Get in touch with us for any questions or assistance.</p>

                <form class="contact-form2">

                    <label for="name">Full Name</label>
                    <input id="name" type="text" placeholder="Enter your name" required>

                    <label for="email">Email Address</label>
                    <input id="email" type="email" placeholder="Enter your email" required>

                    <label for="subject">Subject</label>
                    <input id="subject" type="text" placeholder="Enter subject" required>

                    <label for="message">Message</label>
                    <textarea id="message" rows="4" placeholder="Write your message..." required></textarea>

                    <button type="submit" class="send-btn">Send Message</button>

                </form>
            </div>
        </div>

        <!-- RIGHT INFO -->
<div class="contact-form1">
    <div>
        <h1>Contact Info</h1>
        <br>

        <!-- ADDRESS (Google Maps link) -->
        <div class="info-item ps-5">
            <span>📍</span>
            <div>
                <strong>Address</strong><br>
                <a href="https://maps.google.com/?q=123 Cyber Street Tech City" target="_blank">
                    123 Cyber Street<br>Tech City
                </a>
            </div>
        </div>
        <br>

        <!-- PHONE -->
        <div class="info-item ps-5 ">
            <span>📞</span>
            <div>
                <strong>Phone</strong><br>
                <a href="tel:+1555123456">+1 555 123456</a>
            </div>
        </div>
        <br>

        <!-- EMAIL -->
        <div class="info-item ps-5">
            <span>✉️</span>
            <div>
                <strong>Email</strong><br>
                <a href="mailto:contact@cyberfraud.com">
                    contact@cyberfraud.com
                </a>
            </div>
        </div>
        <br>

        <!-- SOCIAL MEDIA -->
        <div class="social-icons1 ps-5">
            <a href="#" target="_blank"><i class="fab fa-facebook-f txt-light"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter txt-light"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin-in txt-light"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram txt-light" ></i></a>
        </div>

    </div>
</div>
</div>

</section>
@endsection