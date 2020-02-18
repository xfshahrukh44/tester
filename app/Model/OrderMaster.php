<?php

namespace App\Model;
namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderMaster extends Model
{
    public function order_item()
    {
        return $this->hasMany('App\Model\OrderItem');
    }

    public function order_user()
    {
        return $this->belongsTo('App\User');
    }
}
