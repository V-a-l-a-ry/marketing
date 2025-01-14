<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    // Mass assignable attributes
    protected $fillable = [
        'title',
        'category_id',
        'content_file',
        'send_date',
        'opens',
        'read_time',   // Estimated read time in minutes
        'image_url',   // Path to the newsletter's featured image
    ];

    // Casts for specific fields
    protected $casts = [
        'send_date' => 'datetime', // Automatically cast send_date to a Carbon object
    ];
}
