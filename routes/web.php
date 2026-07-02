<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\PhishingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::post('/login',
        [AuthController::class, 'login'])
        ->name('login');

    Route::post('/register',
        [AuthController::class, 'register'])
        ->name('register');
});


/*
|--------------------------------------------------------------------------
| GOOGLE LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/auth/google',
    [AuthController::class, 'googleRedirect'])
    ->name('google.login');

Route::get('/auth/google/callback',
    [AuthController::class, 'googleCallback']);


/*
|--------------------------------------------------------------------------
| FACEBOOK LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/auth/facebook',
    [AuthController::class, 'facebookRedirect'])
    ->name('facebook.login');

Route::get('/auth/facebook/callback',
    [AuthController::class, 'facebookCallback']);


/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout',
    [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| AUTH PROTECTED ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard',
        [DashboardController::class, 'index'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | ADMIN DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/admin-dashboard',
        [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');


    /*
    |--------------------------------------------------------------------------
    | PAGES
    |--------------------------------------------------------------------------
    */

    Route::get('/about',
        [AboutController::class, 'index'])
        ->name('about');

    Route::get('/alerts',
        [AlertController::class, 'index'])
        ->name('alerts');

    Route::get('/phishing',
        [PhishingController::class, 'index'])
        ->name('phish');

    Route::view('/identity', 'identity');

    Route::view('/payment', 'payment');

    Route::view('/social', 'social');

    Route::view('/privacy', 'privacy');

    Route::view('/terms', 'terms');

    Route::view('/teams', 'teams');

    Route::get('/tips',
        fn() => view('fraud-tips'))
        ->name('tips');

    Route::get('/consulting',
        fn() => view('consulting'))
        ->name('consulting');

    Route::get('/team',
        [PageController::class, 'team'])
        ->name('team');


    /*
    |--------------------------------------------------------------------------
    | REPORT
    |--------------------------------------------------------------------------
    */

    Route::get('/report',
        [ReportController::class, 'index'])
        ->name('report');

    Route::post('/submit-report',
        [ReportController::class, 'store'])
        ->name('submit.report');


    /*
    |--------------------------------------------------------------------------
    | CONTACT
    |--------------------------------------------------------------------------
    */

    Route::get('/contact',
        [ContactController::class, 'index'])
        ->name('contact');

    Route::post('/contact',
        [ContactController::class, 'store'])
        ->name('contact.store');


    /*
    |--------------------------------------------------------------------------
    | COMPLAINT STATUS
    |--------------------------------------------------------------------------
    */

    Route::get('/check-status',
        [ComplaintController::class, 'checkForm'])
        ->name('check-status');

    Route::post('/track-status',
        [ComplaintController::class, 'track'])
        ->name('track.status');


    /*
    |--------------------------------------------------------------------------
    | COMPLAINT SUBMIT
    |--------------------------------------------------------------------------
    */

    Route::post('/submit-complaint',
        [ComplaintController::class, 'store'])
        ->name('submit.complaint');


    /*
    |--------------------------------------------------------------------------
    | NEWSLETTER
    |--------------------------------------------------------------------------
    */

    Route::post('/newsletter/subscribe',
        [NewsletterController::class, 'subscribe'])
        ->name('newsletter.subscribe');

});