@php
    $isHome = request()->is('/');
@endphp

<nav class="d-flex justify-content-between {{ $isHome ? 'home-nav' : 'other-nav' }}">
    
    <div class="logo">
        <i class="fas fa-shield-alt"></i>
        <span>CYBER FRAUD AWARENESS</span>
    </div>

    <div class="txt-right">
        <ul class="d-flex list-unstyled gap-1 mb-0">
    <li><a href="{{ route('home') }}" class="button">HOME</a></li>
        <li><a href="{{ route('about') }}" class="button">ABOUT US</a></li>
       <li><a href="{{route('check-status')}}" class="button">CHECK STATUS</a></li>
     <li><a href="{{ route('report') }}" class="button">REPORT US</a></li>
    <li><a href="{{ route('contact') }}" class="button">CONTACT US </a></li>
        <li><a href="{{route('admin')}}" class="button">ADMIN</a></li>
            <li><a href="{{route('signup')}}" class="bttn">SIGN In&Up</a></li>
        </ul>
    </div>

</nav>