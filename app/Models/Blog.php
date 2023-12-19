<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

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
