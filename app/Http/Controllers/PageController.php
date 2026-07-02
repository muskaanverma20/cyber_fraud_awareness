<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
 public function about()
{
    $data = [
        'who_we_are' => 'We are a team working on cyber fraud awareness.',
        'mission' => 'Our mission is to protect users from cyber fraud.',
        'vision' => 'Our vision is a safe and secure digital India.',
        'why_choose_us' => 'We provide fast, secure, and reliable solutions.'
    ];

    return view('about', compact('data'));
}
public function team()
{
    return view('team'); // resources/views/team.blade.php
}
public function career()
{
    return view('career'); // resources/views/career.blade.php
}
public function contact()
{
    return view('contact'); // resources/views/contact.blade.php
}
public function report()
{
    return view('report'); // resources/views/report.blade.php
}
public function monitoring()
{
    return view('monitoring'); // resources/views/monitoring.blade.php
}
public function alerts()
{
    return view('alerts'); // resources/views/alerts.blade.php
}
public function training()
{
    return view('training'); // resources/views/training.blade.php
}
public function tips()
{
    return view('tips'); // resources/views/tips.blade.php
}

public function blog()
{
    return view('blog'); // resources/views/blog.blade.php
}
public function case()
{
    return view('case'); // resources/views/case.blade.php
}
public function faq()
{
    return view('faq'); // resources/views/faq.blade.php
}
public function privacy()
{
    return view('privacy'); // resources/views/privacy.blade.php
}
public function terms()
{
    return view('terms'); // resources/views/terms.blade.php
}
public function cookie()
{
    return view('cookie'); // resources/views/cookie.blade.php
}
}