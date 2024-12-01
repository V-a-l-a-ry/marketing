<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class photos extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'imageable_id', 'imageable_type', 'user_id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
