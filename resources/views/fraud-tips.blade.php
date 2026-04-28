@extends('layouts.app')

@section('content')

<section class="tips-section ">

    <!--  TOP TITLE -->
    <div class="tips-header m-5 ">
        <h1>TIPS FOR PREVENTING CYBER FRAUD</h1>
    </div>

    <!-- GLASS CONTAINER -->
    <div class="container tips-container glass">

        <!-- LEFT SHIELD -->
        <div class="tips-left">
            <div class="shield-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="tips-right">

            <div class="tip-row left slide-left delay-1">
                <div class="icon-circle"><i class="fa-solid fa-thumbs-up"></i></div>
                <p>Follow general best practices</p>
            </div>

            <div class="tip-row right slide-right delay-2">
                <div class="icon-circle"><i class="fa-solid fa-rotate"></i></div>
                <p>Keep your technology up to date</p>
            </div>

            <div class="tip-row left slide-left delay-3">
                <div class="icon-circle"><i class="fa-solid fa-triangle-exclamation"></i></div>
                <p>Be cautious with public networks</p>
            </div>

            <div class="tip-row right slide-right delay-4">
                <div class="icon-circle"><i class="fa-solid fa-key"></i></div>
                <p>Be strategic with login credentials</p>
            </div>

            <div class="tip-row left slide-left delay-5">
                <div class="icon-circle"><i class="fa-solid fa-lock"></i></div>
                <p>Ensure you're on a secure website</p>
            </div>

            <div class="tip-row right slide-right delay-6">
                <div class="icon-circle"><i class="fa-solid fa-envelope"></i></div>
                <p>Beware of phishing</p>
            </div>

        </div>

    </div>

</section>

@endsection