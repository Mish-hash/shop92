<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'img'];

    public function products() 
    {
        return $this->hasMany(\App\Product::class);
    }

    public function getImgAttribute($value)
    {
        return $value ? $value : asset('/images/noImg.jpg');
    }    
}
