<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class luminaries extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'testimonial', 'user_id'];

    public function admin()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function photos()
    {
        return $this->morphMany(photos::class, 'imageable');
    }
}
