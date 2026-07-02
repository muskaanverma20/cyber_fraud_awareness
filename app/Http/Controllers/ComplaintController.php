<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    // Show status form
    public function checkForm()
    {
        return view('check-status');
    }

    // Track complaint status
    public function track(Request $request)
    {
        $request->validate([
            'complaint_id' => 'required',
            'mobile' => 'required'
        ]);

        $complaint = Complaint::where('complaint_id', $request->complaint_id)
            ->where('mobile', $request->mobile)
            ->first();

        if (!$complaint) {
            return back()->with('error', 'Complaint not found!');
        }

        return back()->with([
            'status' => $complaint->status,
            'complaintData' => $complaint
        ]);
    }

    // Save complaint (example)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'complaint' => 'required'
        ]);

$complaintId = 'CF' . now()->format('YmdHis');
        Complaint::create([
            'complaint_id' => $complaintId,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'complaint' => $request->complaint,
            'status' => 'Complaint Registered'
        ]);

        return back()->with('success', 'Complaint Submitted Successfully!');
    }
}