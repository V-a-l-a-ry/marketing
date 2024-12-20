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
        'content',      // Added 'content' to store the newsletter's content
        'send_date',
        'opens',
    ];

    // Casts for specific fields
    protected $casts = [
        'send_date' => 'datetime', // Automatically cast send_date to a Carbon object
    ];
}
