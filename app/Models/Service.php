<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $appends = ['service_image_url', 'service_url'];
    public function getServiceImageUrlAttribute()
    {
        return asset('public/img.services/' . $this->attributes['service_image']);
    }

    public function getServiceUrlAttribute()
    {
        return url('service', $this->attributes['id']);
    }
}
