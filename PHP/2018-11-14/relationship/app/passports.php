<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\users;

class passports extends Model
{
    public function user()
    {
        return $this->hasOne('App\users','passport_id');
    }
}
