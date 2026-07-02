<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhishingPost extends Model
{
    protected $table = 'phishing_posts';

    protected $fillable = [
        'title',
        'description',
        'type',
        'fake_link',
        'email_from'
    ];
}