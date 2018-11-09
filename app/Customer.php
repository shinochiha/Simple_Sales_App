<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    public $fillable = [
    	'name',
    	'phone',
    	'email'
    ];

    protected $primaryKey = 'cust_id';

    public function getRouteKeyName()
    {
    	return 'cust_id';
    }

    public function sale()
    {
        return $this->hasMany('App\Sale', 'cust_id');
    }
}
