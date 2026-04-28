<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller {
    public function index(){
        $posts = Post::latest()->get();
        return view('home', compact('posts'));
    }
}