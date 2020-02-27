<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMaster extends Model
{
    use SoftDeletes;

    protected $fillable = ['product_category_id', 'title', 'short_desc', 'long_desc', 'unit', 'price', 'cost', 'discount', 'status', 'created_by', 'modified_by', 'threshold'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    

    public function product_category()
    {
        return $this->belongsTo('App\Model\ProductCategory');
    }

    public function warehouse()
    {
        return $this->belongsToMany(Warehouse::class);
    }

    public function order_masters()
    {
        return $this->belongsToMany('App\Model\OrderMaster');
    }

}
