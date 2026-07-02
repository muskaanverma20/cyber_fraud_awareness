<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    // SHOW ALERT PAGE
    public function index(Request $request)
    {
        $query = Alert::query();

        // SEARCH
        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // FILTER
        if ($request->type && $request->type != 'all') {
            $query->where('type', $request->type);
        }

        $alerts = $query->orderBy('alert_date', 'desc')->get();

        return view('alerts', compact('alerts'));
    }
}