<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $service_name
 * @property $service_description
 * @property $service_image
 * @property $service_price
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{

    static $rules = [
        'service_name' => 'required',
        'service_description' => 'required',
        'service_image' => 'required',
        'service_price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['service_name', 'service_description', 'service_image', 'service_price'];


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
