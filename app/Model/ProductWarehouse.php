<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductWarehouse extends Model
{
	use SoftDeletes;
	
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function warehouse()
    {
        return $this->belongsTo('App\Model\Warehouse');
    }

    public function product_master()
    {
        return $this->belongsTo('App\Model\ProductMaster');
    }
}
