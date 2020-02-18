<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public function product_warehouse()
    {
        return $this->hasMany('App\Model\ProductWarehouse');
    }
}
