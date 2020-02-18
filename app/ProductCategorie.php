<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategorie extends Model
{
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function product_master() {
        return $this->hasMany('App\ProductMaster');
    }
}
