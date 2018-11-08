<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
    	'name', 'category_id', 'price'
    ];

    protected $primaryKey = "product_id";

    public function getRouteKeyName()
    {
    	return 'product_id';
    }

    public function sale()
    {
        return $this->hasOne('App\Sale', 'product_id');
    }

    public function categories()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }
}
