<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    public $fillable = [
    	'name'
    ];
    protected $primaryKey = 'category_id';
    
    public function getRouteKey()
    {
    	return 'category_id';
    }
}
