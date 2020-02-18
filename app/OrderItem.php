<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function order_master() {
        return $this->belongsTo('App\OrderMaster');
    }
}
