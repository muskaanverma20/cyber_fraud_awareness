<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About Us',
            'subtitle' => 'Fighting Cyber Crime & Online Fraud',

            'who_we_are' => 'We are a team of experienced cybersecurity professionals committed to protecting individuals and businesses from cybercrime, scams, phishing, and digital threats.',

            'mission' => 'Our mission is to create a safer digital environment by educating users, raising awareness, and providing solutions against cyber fraud.',

            'vision' => 'Our vision is to become a trusted platform for cyber fraud awareness and build a secure online community.',
        ];

        return view('about', compact('data'));
    }
}