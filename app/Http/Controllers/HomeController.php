<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Threat;
use App\Models\Service;
use App\Models\News;

class HomeController extends Controller
{
    public function home()
    {
        $threats = Threat::all();
        $services = Service::all();
        $news = News::latest()->get();

        return view('home', compact('threats', 'services', 'news'));
    }
}