<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;


/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home'); // main page (login + signup)
})->name('home');

/*
|--------------------------------------------------------------------------
| AUTH (LOGIN / REGISTER)
|--------------------------------------------------------------------------
*/
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

/*
|--------------------------------------------------------------------------
| STATIC PAGES
|--------------------------------------------------------------------------
*/
Route::get('/alerts', function () {
    return view('alerts');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/tips', function () {
    return view('fraud-tips');
});

Route::get('/phishing',function(){
    return view('phish');
});

Route::get('/identity',function(){
    return view('identity');
});
Route::get('/payment', function(){
    return view('payment');
});
Route::get('/social', function(){
    return view('social');
});
Route::get('/privacy', function(){
    return view('privacy');
});
Route::get('/terms',function(){
    return view('terms');
});
Route::get('/consulting',function(){
    return view('consulting');
});

/*
|--------------------------------------------------------------------------
| REPORT
|--------------------------------------------------------------------------
*/
Route::get('/report', [ReportController::class, 'index'])->name('report');
Route::post('/submit-report', [ReportController::class, 'store'])->name('submit.report');

/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| CHECK STATUS
|--------------------------------------------------------------------------
*/
Route::get('/check-status', [ComplaintController::class, 'checkForm'])->name('check-status');
Route::post('/track-status', [ComplaintController::class, 'track'])->name('track-status');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin');


/*
|--------------------------------------------------------------------------
| SIGNUP PAGE (optional direct)
|--------------------------------------------------------------------------
*/
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// About Page Route
Route::get('/about', [AboutController::class, 'index'])->name('about');