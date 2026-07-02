<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FraudReport;
use App\Models\Complaint;

class ReportController extends Controller
{
    /**
     * Show Report Page
     */
    public function index()
    {
        return view('report');
    }

    /**
     * Store Fraud Report + Auto Complaint
     */
    public function store(Request $request)
    {
        // VALIDATION
        $request->validate([

            'first_name'  => 'required|string|max:255',

            'last_name'   => 'required|string|max:255',

            'email'       => 'required|email',

            // Phone Validation
            'phone' => [
                'required',
                'digits:10',
                'regex:/^[6-9][0-9]{9}$/'
            ],

            'fraud_type'  => 'required',

            'description' => 'required|max:1000',

            'evidence'    => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:10240',

        ], [

            'phone.required' => 'Please enter your mobile number.',

            'phone.digits' => 'Mobile number must be exactly 10 digits.',

            'phone.regex' => 'Please enter a valid 10-digit Indian mobile number.',

        ]);


        /*
        |--------------------------------------------------------------------------
        | FILE UPLOAD
        |--------------------------------------------------------------------------
        */

        $filename = null;

        if ($request->hasFile('evidence')) {

            $file = $request->file('evidence');

            $filename = time() . '_' . $file->getClientOriginalName();

            $file->move(public_path('uploads'), $filename);
        }


        /*
        |--------------------------------------------------------------------------
        | FULL NAME
        |--------------------------------------------------------------------------
        */

        $fullName = $request->first_name . ' ' . $request->last_name;


        /*
        |--------------------------------------------------------------------------
        | SAVE FRAUD REPORT
        |--------------------------------------------------------------------------
        */

        $report = FraudReport::create([

            'name'        => $fullName,

            'email'       => $request->email,

            'phone'       => $request->phone,

            'fraud_type'  => $request->fraud_type,

            'description' => $request->description,

            'evidence'    => $filename,

            'status'      => 'Pending'

        ]);


        /*
        |--------------------------------------------------------------------------
        | GENERATE COMPLAINT ID
        |--------------------------------------------------------------------------
        */

        $complaintId = 'CF' . now()->format('YmdHis');


        /*
        |--------------------------------------------------------------------------
        | AUTO CREATE COMPLAINT
        |--------------------------------------------------------------------------
        */

        Complaint::create([

            'fraud_report_id' => $report->id,

            'complaint_id'    => $complaintId,

            'name'            => $fullName,

            'mobile'          => $request->phone,

            'email'           => $request->email,

            'complaint'       => $request->description,

            'status'          => 'Complaint Registered'

        ]);


        /*
        |--------------------------------------------------------------------------
        | REDIRECT BACK
        |--------------------------------------------------------------------------
        */

        return redirect()->back()->with([

            'success'      => 'Report Submitted Successfully!',

            'complaint_id' => $complaintId

        ]);
    }
}