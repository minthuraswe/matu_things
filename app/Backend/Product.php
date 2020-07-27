<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 
        'pd_name', 'pd_price', 'pd_image', 'cat_id',
    ];

    public function category(){
        return $this->belongsTo('App\Backend\Category');
    }
}
