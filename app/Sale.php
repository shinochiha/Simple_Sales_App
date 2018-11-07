<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = false;
    public $fillable = [
    	'date',
        'cust_id',
        'product_id', 
        'qty', 
        'price' 
    ];

    // setting id 
    protected $primaryKey = 'sales_id';

    // buat function untuk menjalankan primaryKey
    public function getRouteKeyName()
    {
    	return 'sales_id';
    }
}
