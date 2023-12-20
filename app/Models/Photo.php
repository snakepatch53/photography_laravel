<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 *
 * @property $id
 * @property $photo_name
 * @property $service_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Photo extends Model
{

    static $rules = [
        'photo_name' => 'required',
        'service_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['photo_name', 'service_id'];


    protected $appends = ['photo_url'];
    public function getPhotoUrlAttribute()
    {
        return asset('public/img.photos/' . $this->attributes['photo_name']);
    }
}
