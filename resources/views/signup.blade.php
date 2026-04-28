@extends('layouts.app')

@section('content')
<div class="page-wrapper"> 
  <div class="container1">

<section class="login-section ">

<div class="box-wrapper">

<!-- SIGN IN -->
<div class="col">

<div class="d-flex1 header-row">
<h2 class="txt-light ps-3 pb-5">Sign In</h2>

<div class="buttons-wrapper">
 <p class="screenreader-only txt-light">Sign in with</p>


<button class="auth-btn button1">
<svg width="20" height="20" viewBox="0 0 48 48">
  <path fill="#1877F2" d="M24 0C10.75 0 0 10.75 0 24c0 11.94 8.72 21.85 20.13 23.7V30.89h-6.06v-6.89h6.06v-5.26c0-6 3.58-9.32 9.05-9.32 2.62 0 5.37.47 5.37.47v5.9h-3.03c-2.99 0-3.92 1.86-3.92 3.76v4.45h6.67l-1.07 6.89h-5.6V47.7C39.28 45.85 48 35.94 48 24 48 10.75 37.25 0 24 0z"/>
</svg>
</button>

<button class="auth-btn button1">
<svg width="20" height="20" viewBox="0 0 48 48">
  <path fill="#EA4335" d="M24 9.5c3.54 0 6.73 1.22 9.24 3.6l6.9-6.9C35.64 2.36 30.18 0 24 0 14.82 0 6.94 5.48 3.44 13.44l8.04 6.24C13.3 13.02 18.25 9.5 24 9.5z"/>
  <path fill="#4285F4" d="M46.5 24c0-1.64-.14-3.21-.4-4.73H24v9h12.7c-.55 2.97-2.23 5.48-4.75 7.16l7.3 5.68C43.9 36.36 46.5 30.7 46.5 24z"/>
  <path fill="#FBBC05" d="M11.48 28.68A14.5 14.5 0 0 1 9.5 24c0-1.62.28-3.18.78-4.68l-8.04-6.24A23.98 23.98 0 0 0 0 24c0 3.98.96 7.73 2.68 11.08l8.8-6.4z"/>
  <path fill="#34A853" d="M24 48c6.48 0 11.92-2.14 15.9-5.82l-7.3-5.68c-2.02 1.36-4.6 2.16-8.6 2.16-5.75 0-10.7-3.52-12.52-8.5l-8.8 6.4C6.94 42.52 14.82 48 24 48z"/>
</svg>
</button> 
</div>
</div>

<form method="POST" action="{{ route('login') }}" class="form">
@csrf

<div class="form-group">
<input type="email" name="email" id="login-name" placeholder="Email" required>
<label for="login-name">Email</label>
</div>

<div class="form-group">
<input type="password" name="password" id="login-password" placeholder="Password" required>
<label for="login-password">Password</label>
</div>

<button type="submit" class="submit button1 ">Sign In</button>

<div class="d-flex">
<label for="remember-me" class="remember-me">
<input type="checkbox" name="remember" id="remember-me">
<span class="p-2">Remember Me</span>
</label>
<a href="#" class="password-reset pt-1 ">Forgot Password?</a>
</div>

</form>
</div>

<!-- SIGN UP -->
<div class="col">

<h2>Sign Up</h2>
<br>


<form method="POST" action="{{ route('register') }}" class="form">
@csrf

<div class="form-group">
<input type="text" name="name" id="register-name" placeholder="Username" required>
<label for="register-name">Username</label>
</div>

<div class="form-group">
<input type="email" name="email" id="email" placeholder="E-mail" required>
<label for="email">E-Mail</label>
</div>

<div class="form-group">
<input type="password" name="password" id="register-password" placeholder="Password" required>
<label for="register-password">Password</label>
</div>

<div class="form-group">
<input type="password" name="password_confirmation" placeholder="Confirm Password" required>
</div>

<button type="submit" class="submit button1">Sign Up</button>

</form>
</div>

<!-- OVERLAY -->
<div class="overlay">
<h3 class="heading">Welcome Back</h3>
<p class="subheading">Don't have an account?</p>

<button class="toggleBtn mobileToggleBtn button1">
<span class="text-btn">Sign Up</span>
</button>
</div>

</div>
</section>

</div>
</div>

<script>
window.addEventListener("DOMContentLoaded",()=>{

const toggleBtn = document.querySelector(".toggleBtn");
const box = document.querySelector(".box-wrapper");
const textBtn = document.querySelector(".text-btn");
const heading = document.querySelector(".heading");
const subheading = document.querySelector(".subheading");

toggleBtn.addEventListener("click",()=>{

box.classList.toggle("active");

if(box.classList.contains("active")){
heading.textContent="Create Account";
subheading.textContent="Already have an account?";
textBtn.textContent="Sign In";
}else{
heading.textContent="Welcome Back";
subheading.textContent="Don't have an account?";
textBtn.textContent="Sign Up";
}

});

});
</script>
@endsection