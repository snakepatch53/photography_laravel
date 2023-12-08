<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $appends = ['photo_url'];
    public function getPhotoUrlAttribute()
    {
        return asset('public/img.photos/' . $this->attributes['photo_name']);
    }
}
