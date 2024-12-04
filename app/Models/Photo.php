<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'photo_description',
        'photo_comment',
        'Upload_time',
        'gallery_id',
        'path',
    ];

    // Relationships
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
