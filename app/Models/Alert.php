<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;

    protected $table = 'alerts'; // explicitly define table name

    protected $fillable = [
        'title',
        'description',
        'type',        // fraud type (bank, upi, job)
        'risk_level',  // High, Medium, Low
        'alert_date'   // custom date column
    ];

    // Cast alert_date to Carbon instance for easy date formatting
    protected $casts = [
        'alert_date' => 'datetime',
    ];
}
