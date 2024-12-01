<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the default (optional)
    protected $table = 'newsletter';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'title',
        'folder_path',
        'category',
    ];
}