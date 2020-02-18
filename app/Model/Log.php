<?php

namespace App\Model;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function log_user()
    {
        return $this->belongsTo('App\User');
    }
}
