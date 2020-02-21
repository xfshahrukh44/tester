<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function product_master()
    {
        return $this->belongsTo('App\Model\ProductMaster');
    }

    public function order_master()
    {
        return $this->belongsTo('App\Model\OrderMaster');
    }
}
