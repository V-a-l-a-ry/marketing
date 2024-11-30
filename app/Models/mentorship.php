<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mentorship extends Model
{
    use HasFactory;

    protected $fillable = ['category'];

    public function events()
    {
        return $this->hasMany(events::class);
    }

    public function photos()
    {
        return $this->morphMany(photos::class, 'imageable');
    }
}
