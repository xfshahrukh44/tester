<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function product_warehouse()
    {
        return $this->hasMany('App\Model\ProductWarehouse');
    }
}
