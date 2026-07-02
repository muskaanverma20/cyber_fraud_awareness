<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\FraudReport;

class DashboardController extends Controller
{
    public function index()
    {
        // LOGIN USER
        $user = auth()->user();

        // USER KI FRAUD REPORTS
        $fraudReports = FraudReport::where(
            'email',
            $user->email
        )->latest()->get();

        // USER KI COMPLAINTS
        $complaints = Complaint::where(
            'email',
            $user->email
        )->latest()->get();

        // TOTAL REPORTS
        $totalReports = $fraudReports->count();

        // RESOLVED REPORTS
        $resolvedReports = $fraudReports->where(
            'status',
            'Resolved'
        )->count();

        // PENDING REPORTS
        $pendingReports = $fraudReports->where(
            'status',
            'Pending'
        )->count();

        // REJECTED REPORTS
        $rejectedReports = $fraudReports->where(
            'status',
            'Rejected'
        )->count();

        return view('dashboard', compact(

            'user',
            'fraudReports',
            'complaints',
            'totalReports',
            'resolvedReports',
            'pendingReports',
            'rejectedReports'

        ));
    }
}