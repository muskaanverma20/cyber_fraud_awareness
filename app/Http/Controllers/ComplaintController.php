<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function checkForm()
    {
        return view('check-status');
    }

    public function track(Request $request)
    {
        $request->validate([
            'complaint_id' => 'required',
            'mobile' => 'required'
        ]);

        // Dummy data (later DB se laoge)
        $status = "Under Investigation";

        return back()->with('status', $status);
    }
}
