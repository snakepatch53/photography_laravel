<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 *
 * @property $id
 * @property $blog_title
 * @property $blog_subtitle
 * @property $blog_image
 * @property $blog_description
 * @property $blog_content
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Blog extends Model
{

    static $rules = [
        'blog_title' => 'required',
        'blog_subtitle' => 'required',
        'blog_image' => 'required',
        'blog_description' => 'required',
        'blog_content' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['blog_title', 'blog_subtitle', 'blog_image', 'blog_description', 'blog_content'];

    protected $appends = ['blog_image_url', 'blog_url'];
    public function getBlogImageUrlAttribute()
    {
        return asset('public/img.blog/' . $this->attributes['blog_image']);
    }

    public function getBlogUrlAttribute()
    {
        return url('blog', $this->attributes['id']);
    }
}
