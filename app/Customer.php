<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
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
}
