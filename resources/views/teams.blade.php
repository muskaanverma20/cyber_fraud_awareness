@extends('layouts.app')

@section('content')

<section class="team-hero">S

    <div class="container">
        <div class="content">
            <h5>Our Team</h5>
            <h1>
                The People Behind <br>
                <span>Cyber Shield</span>
            </h1>

            <p>
                A passionate team of cybersecurity experts, developers, analysts
                and designers working together to build a safer digital world.
            </p>

            <div class="breadcrumb">
                <span><a href="/" class="text-blue text-decoration-none"> Home</a></span> > <span>Our Team</span>
            </div>
        </div>
    </div>
</section>
<section class="mission-sec-tion">
    <br>
    <br>
    <div class="mission-bo-x col-11 mx-auto ">

        <!-- Left Content -->
        <div class="mission-left">
            <div class="icon-bo-x">
                🛡️
            </div>
            <div>
                <h3>United by a Common Mission</h3>
                <p>
                    We are a diverse group of professionals dedicated to 
                    combating cyber threats, spreading awareness and 
                    empowering individuals to stay safe online.
                </p>
            </div>
        </div>

        <!-- Stats -->
        <div class="mission-statts">

            <div class="statt">
                <div class="statt-icon">👥</div>
                <h2>12+</h2>
                <p>Team Members</p>
            </div>

            <div class="divider"></div>

            <div class="statt">
                <div class="statt-icon">⭐</div>
                <h2>5+</h2>
                <p>Years of Experience</p>
            </div>

            <div class="divider"></div>

            <div class="statt">
                <div class="statt-icon">🎯</div>
                <h2>1000+</h2>
                <p>Users Helped</p>
            </div>

            <div class="divider"></div>

            <div class="statt">
                <div class="statt-icon">🛡️</div>
                <h2>24/7</h2>
                <p>Always Committed</p>
            </div>

        </div>

    </div>
    <br>
    <br>
    <div>
    <h2 class="sec-tion-ti-tle text-center ">Meet Our Team</h2>
    <p class="sec-tion-sub-title text-center">
        Experts with different skills, one goal – a secure digital future for all.
    </p>

    <div class="team-container col-11 mx-auto align-item-center justify-content-between flex-wrap">

        <!-- Card 1 -->
        <div class="team-card">
            <div class="imge-box">
                <img src="{{ asset('img/rohit.jpeg') }}" alt="Rohit">
                <span class="verify">✔</span>
            </div>
            <h3>Rohit Sharma</h3>
            <h5>Founder & CEO</h5>
            <p>Cybersecurity enthusiast and ethical hacker with a mission to create a safer digital India.</p>

            <div class="socialss">
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="team-card">
            <div class="imge-box">
                <img src="{{ asset('img/annya.jpeg') }}" alt="Ananya">
                <span class="verify">✔</span>
            </div>
            <h3>Ananya Verma</h3>
            <h5>Cyber Security Analyst</h5>
            <p>Specializes in threat analysis, vulnerability assessment and incident response.</p>

            <div class="socialss">
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="team-card">
            <div class="imge-box">
                <img src="{{ asset('img/ajay.jpeg') }}" alt="ajay">
                <span class="verify">✔</span>
            </div>
            <h3>Ajay Mehta</h3>
            <h5>Full Stack Developer</h5>
            <p>Loves building secure, fast and user-friendly web applications that make a difference.</p>

            <div class="socialss">
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-github"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="team-card">
            <div class="imge-box">
                <img src="{{ asset('img/sneha.jpeg') }}" alt="Sneha">
                <span class="verify">✔</span>
            </div>
            <h3>Sneha Iyer</h3>
            <h5>UI/UX Designer</h5>
            <p>Designs intuitive and engaging experiences that help users stay aware and informed.</p>

            <div class="socialss">
                <i class="fab fa-linkedin"></i>
                <i class="fas fa-globe"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

    </div>
    <br>
    <br>

     <div class="team-container col-11 mx-auto align-item-center justify-content-between flex-wrap">

        <!-- Card 1 -->
        <div class="team-card">
            <div class="imge-box">
                <img src="{{ asset('img/simran.jpeg') }}" alt="Simaran">
                <span class="verify">✔</span>
            </div>
            <h3>Simaran Sharma</h3>
            <h5>Frontend Developer</h5>
            <p> Passionate about creating beautiful and functional user interfaces.</p>

            <div class="socialss">
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="team-card">
            <div class="imge-box">
                <img src="{{ asset('img/arjun.jpeg') }}" alt="Arjun">
                <span class="verify">✔</span>
            </div>
            <h3>Arjun Verma</h3>
            <h5>Content Writer</h5>
            <p>Passionate about creating engaging content that educates and informs.</p>

            <div class="socialss">
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="team-card">
            <div class="imge-box">
                <img src="{{ asset('img/khushi.jpeg') }}" alt="Khushi">
                <span class="verify">✔</span>
            </div>
            <h3>Khushi Patel</h3>
            <h5>Full Stack Developer</h5>
            <p>Loves building secure, fast and user-friendly web applications that make a difference.</p>

            <div class="socialss">
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-github"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="team-card">
            <div class="imge-box">
                <img src="{{ asset('img/sahil.jpeg') }}" alt="Sahil">
                <span class="verify">✔</span>
            </div>
            <h3>Sahil Khan</h3>
            <h5>Marketing Specialist</h5>
            <p>Passionate about promoting cybersecurity awareness and educating the public.</p>

            <div class="socialss">
                <i class="fab fa-linkedin"></i>
                <i class="fas fa-globe"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>

    </div>
</div>
    <br>
    <br>
    <div class="quote-box col-10 mx-auto d-flex align-item-center justify-content-between flex-wrap">

        <!-- Left Quote -->
        <div class="quote-left">
            <span class="quote-icon">❝</span>
            <p>
                Alone we can do so little; together we can do so much to make the digital world safer.
            </p>
            <span class="quote-icon right">❞</span>
        </div>

        <!-- Divider -->
        <div class="vertical-line"></div>

        <!-- Right Content -->
        <div class="quote-right">
            <div class="shield-icn">🛡️</div>
            <div>
                <h4>Thank you for trusting Cyber Shield.</h4>
                <p>We are here for you, always.</p>
            </div>
        </div>

    </div>
<br>
<br>
</section>
@endsection