<?php

namespace App\Model;
// namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderMaster extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'title', 'status', 'payment', 'discount', 'discount_unit'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function order_item()
    {
        return $this->hasMany('App\Model\OrderItem');
    }

    public function order_user()
    {
        return $this->belongsTo('App\User');
    }
}
