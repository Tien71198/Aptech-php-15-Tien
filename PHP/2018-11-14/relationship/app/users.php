<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\passports;

class users extends Model
{
    public function passport()
    {
        return $this->belongsTo('App\passports', 'passport_id');
       
    }
}
