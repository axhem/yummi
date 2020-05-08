<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * Get Orderproducts associated with Product
     */
    public function ordered_products()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
