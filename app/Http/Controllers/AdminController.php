<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $complaints = [
            (object)[
                'id'=>101,'name'=>'Aman Singh','type'=>'Phishing','date'=>'2024-04-22','status'=>'Under'
            ],
            (object)[
                'id'=>102,'name'=>'Karan Kumar','type'=>'UPI Fraud','date'=>'2024-04-18','status'=>'Resolved'
            ],
            (object)[
                'id'=>102,'name'=>'Arjun Sharma','type'=>'Job Scam','date'=>'2024-04-22','status'=>'Pending'
            ],
     (object)[
                'id'=>102,'name'=>'Priya Verma','type'=>'E-commerce Fraud','date'=>'2024-05-3','status'=>'Under'
            ],
     (object)[
                'id'=>102,'name'=>'Rohit Arora','type'=>'UPI Fraud','date'=>'2024-05-18','status'=>'Rejected'
            ],
     
        ];

        return view('admin.dashboard', [
            'complaints'=>$complaints,
            'total'=>125,
            'pending'=>28,
            'resolved'=>80
        ]);
    }
}
