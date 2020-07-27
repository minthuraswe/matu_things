<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'cat_name', 'cat_image'
    ];

    public function products(){
        return $this->hasMany('App\Backend\Product');
    }
}
