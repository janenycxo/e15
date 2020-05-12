<?php

namespace App;
use Arr;
use Str;
use App\Restaurant;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function restaurants()
    {
        return $this->hasMany('App\Restaurant');
    }   
}
