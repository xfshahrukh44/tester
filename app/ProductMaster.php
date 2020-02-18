<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMaster extends Model
{
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function product_categories() {
        return $this->belongsTo('App\ProductCategorie');
    }
	
	public function product_warehouse() {
        return $this->hasMany('App\ProductWarehouse');
    }

    public function product_order_item() {
        return $this->hasMany('App\OrderItem');
    }
}
