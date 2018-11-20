<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    public function category()
    {
        return $this->belongsToMany('App\categories');
    }
    
}
