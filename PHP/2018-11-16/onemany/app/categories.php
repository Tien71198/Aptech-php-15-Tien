<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function post()
    {
        return $this ->hasMany('App/posts');
    }
}
