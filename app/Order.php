<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Allow mass assignment
    protected $guarded = [];
    //Timestamps
    public $timestamps = true;


    /**
     * Get Orderproducts associated with Orders
     */
    public function orderproduct()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
