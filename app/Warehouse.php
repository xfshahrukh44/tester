<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function warehouse_product() {
        return $this->hasMany('App\ProductWarehouse');
    }
}
