<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $dates = ['created_at','updated_at'];

    public function user_log() {
        return $this->belongsTo('App\User');
    }
}
