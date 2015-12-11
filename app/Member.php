<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function assets()
    {
        return $this->belongsToMany('App\Asset');
    }
}
