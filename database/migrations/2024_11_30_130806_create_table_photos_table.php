<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'gallery_id',
        'image_path',
        'description',
        'comment',
    ];

    // Relationship with Gallery
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}

