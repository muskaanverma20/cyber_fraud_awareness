<?php

namespace App\Http\Controllers;

use App\Models\PhishingPost;

class PhishingController extends Controller
{
    public function index()
    {
        $posts = PhishingPost::latest()->get();

        return view('phish', compact('posts'));
    }
}