<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public function product_master()
    {
        return $this->hasMany('App\Model\ProductMaster');
    }
}
