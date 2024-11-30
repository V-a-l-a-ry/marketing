<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gallery extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function photos()
    {
        return $this->morphMany(photos::class, 'imageable');
    }
}
