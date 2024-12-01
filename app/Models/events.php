<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class events extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'mentorship_id'];

    public function mentorship()
    {
        return $this->belongsTo(mentorship::class);
    }

    public function photos()
    {
        return $this->morphMany(photos::class, 'imageable');
    }
}
