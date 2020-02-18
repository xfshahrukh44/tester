<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMaster extends Model
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

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