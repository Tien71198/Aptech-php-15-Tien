<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\phones;

class users extends Model
{
   public function phone()
   {
        return $this->hasOne('App\phones','user_id');
        
   }
}
