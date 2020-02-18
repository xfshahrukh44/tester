<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderMaster extends Model
{
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function order_item() {
        return $this->hasMany('App\OrderItem');
    }

    public function product_warehouse() {
        return $this->belongsTo('App\User');
    }
}
