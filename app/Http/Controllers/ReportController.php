<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('report');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'fraud_type' => 'required',
            'description' => 'required',
        ]);

        // File upload
        if ($request->hasFile('evidence')) {
            $file = $request->file('evidence');
            $file->move(public_path('uploads'), $file->getClientOriginalName());
        }

        return back()->with('success', 'Report Submitted Successfully!');
    }
}

