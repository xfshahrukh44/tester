<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductMaster extends Model
{
    public function product_category()
    {
        return $this->belongsTo('App\Model\ProductCategory');
    }

    public function product_warehouse()
    {
        return $this->hasMany('App\Model\ProductWarehouse');
    }

    public function order_item()
    {
        return $this->hasMany('App\Model\OrderItem');
    }

}
