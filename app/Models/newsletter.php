<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class newsletter extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id'];

    public function admin()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function photos()
    {
        return $this->morphMany(photos::class, 'imageable');
    }
}
