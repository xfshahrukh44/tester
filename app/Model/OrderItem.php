<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function product_master()
    {
        return $this->belongsTo('App\Model\ProductMaster');
    }

    public function order_master()
    {
        return $this->belongsTo('App\Model\OrderMaster');
    }
}
