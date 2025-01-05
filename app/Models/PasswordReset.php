<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;

    // Table name (optional, as Laravel assumes the plural of the model name)
    protected $table = 'password_resets';

    // The attributes that are mass assignable
    protected $fillable = ['email', 'token', 'created_at'];

    // The attributes that should be hidden for arrays
    protected $hidden = [];

    // The attributes that should be cast to native types
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
