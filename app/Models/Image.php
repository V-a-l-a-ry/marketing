<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Table name (optional if convention followed)
    protected $table = 'images';

    // Mass assignable attributes
    protected $fillable = [
        'gallery_id', // Foreign key to the gallery
        'path'        // Path to the image file
    ];

    // Relationship back to the Gallery model
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
