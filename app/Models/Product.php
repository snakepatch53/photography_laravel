<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $appends = ['product_url'];
    public function getProductUrlAttribute()
    {
        return url('product', $this->attributes['id']);
    }
}
