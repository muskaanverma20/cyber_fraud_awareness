<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\FraudReport;
use App\Models\Contact;
use App\Models\Alert;

class AdminController extends Controller
{
    public function dashboard()
    {
        // ONLY ADMIN ACCESS
        if (auth()->user()->role !== 'admin') {

            abort(403, 'Unauthorized Access');

        }

        // ALL COMPLAINTS
        $complaints = Complaint::latest()->get();

        // ALL FRAUD REPORTS
        $fraudReports = FraudReport::latest()->get();

        // ALL CONTACT MESSAGES
        $contacts = Contact::latest()->get();

        // ALL ALERTS
        $alerts = Alert::latest()->get();

        // TOTAL COUNTS
        $totalComplaints = Complaint::count();

        $totalReports = FraudReport::count();

        $totalContacts = Contact::count();

        $totalAlerts = Alert::count();

        // STATUS COUNTS
        $pendingComplaints = Complaint::where(
            'status',
            'Complaint Registered'
        )->count();

        $underInvestigation = Complaint::where(
            'status',
            'Under Investigation'
        )->count();

        $resolvedComplaints = Complaint::where(
            'status',
            'Action Taken'
        )->count();

        return view('admin.dashboard', compact(

            'complaints',
            'fraudReports',
            'contacts',
            'alerts',

            'totalComplaints',
            'totalReports',
            'totalContacts',
            'totalAlerts',

            'pendingComplaints',
            'underInvestigation',
            'resolvedComplaints'

        ));
    }
}