<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'send_date',
        'opens',
    ];

    protected $casts = [
        'send_date' => 'datetime', // Automatically cast send_date to a Carbon object
    ];
}
