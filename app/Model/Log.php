<?php

namespace App\Model;
namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function log_user()
    {
        return $this->belongsTo('App\User');
    }
}
