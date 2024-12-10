<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path',               // Path where the photo is stored
        'gallery_id',         // Associated gallery ID
        'photo_description',  // Description of the photo
        'photo_comment',      // Comment related to the photo
        'upload_time',        // Timestamp of the upload
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'upload_time' => 'datetime',
    ];

    /**
     * Get the gallery that owns the photo.
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
