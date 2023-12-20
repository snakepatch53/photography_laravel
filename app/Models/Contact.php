<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @property $id
 * @property $contact_name
 * @property $contact_value
 * @property $contact_link
 * @property $contact_icon
 * @property $contact_color
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contact extends Model
{
    
    static $rules = [
		'contact_name' => 'required',
		'contact_value' => 'required',
		'contact_link' => 'required',
		'contact_icon' => 'required',
		'contact_color' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contact_name','contact_value','contact_link','contact_icon','contact_color'];



}
