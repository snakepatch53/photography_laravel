<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Video
 *
 * @property $id
 * @property $video_title
 * @property $video_iframe
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Video extends Model
{
    
    static $rules = [
		'video_title' => 'required',
		'video_iframe' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['video_title','video_iframe'];



}
