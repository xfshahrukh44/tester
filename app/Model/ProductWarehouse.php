<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductWarehouse extends Model
{
    public function warehouse()
    {
        return $this->belongsTo('App\Model\Warehouse');
    }

    public function product_master()
    {
        return $this->belongsTo('App\Model\ProductMaster');
    }
}
