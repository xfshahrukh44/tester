<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductWarehouse extends Model
{
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function product_master() {
        return $this->belongsTo('App\ProductMaster');
    }
}
