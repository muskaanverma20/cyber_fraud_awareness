<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FraudReport extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'phone',
        'fraud_type',
        'description',
        'evidence',
        'status'

    ];

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIP
    |--------------------------------------------------------------------------
    */

    // One Fraud Report has one Complaint
    public function complaint()
    {
        return $this->hasOne(Complaint::class);
    }
}