<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $product_name
 * @property $product_title
 * @property $product_subtitle
 * @property $product_icon
 * @property $product_description
 * @property $product_content
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

    static $rules = [
        'product_name' => 'required',
        'product_title' => 'required',
        'product_subtitle' => 'required',
        'product_icon' => 'required',
        'product_description' => 'required',
        'product_content' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_name', 'product_title', 'product_subtitle', 'product_icon', 'product_description', 'product_content'];

    protected $appends = ['product_url'];
    public function getProductUrlAttribute()
    {
        return url('product', $this->attributes['id']);
    }
}
