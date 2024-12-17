<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Table name (optional if convention followed)
    protected $table = 'galleries';

    // Mass assignable attributes
    protected $fillable = [
        'title',      // Gallery Title
        'type',       // Media Type (image, video, document)
        'media_url',  // File Path for Media (e.g., image path)
            // Status (Draft, Scheduled, Sent)
        'send_date',  // Send Date (optional)
        'opens',      // Number of opens (optional)
    ];

    // Accessor to get full URL of media_url field
    public function getMediaUrlAttribute($value)
    {
        // Assuming files are stored in public storage and accessible via public/storage
        return asset('storage/' . $value);
    }

    // Casts to ensure correct data types
    protected $casts = [
        'send_date' => 'date',  // Cast send_date to Carbon date
        'opens' => 'integer',   // Cast opens to integer
    ];

    // Accessor for formatted status (optional)
    public function getFormattedStatusAttribute()
    {
        return ucfirst($this->status);  // Capitalize the first letter of status
    }

    // Scope for filtering by media type (optional)
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
