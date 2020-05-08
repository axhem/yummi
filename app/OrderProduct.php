<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ordered_products';

    
    //Allow mass assignment
    protected $guarded = [];

    /**
     * Get order associated with the OrderProduct.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    /**
     * Get product associated with the OrderProduct.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
