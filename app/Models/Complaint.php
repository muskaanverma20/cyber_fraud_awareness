<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FraudReport;

class Complaint extends Model
{
    protected $fillable = [

        'fraud_report_id',
        'complaint_id',
        'name',
        'mobile',
        'email',
        'complaint',
        'status'

    ];

    // RELATION WITH FRAUD REPORT
    public function fraudReport()
    {
        return $this->belongsTo(FraudReport::class);
    }
}