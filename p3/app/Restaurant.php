<?php

namespace App;
use Arr;
use Str;
use App\Restaurant;
use App\Location;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function cuisines()
    {
        # Restaurants include different cuisines and locations
        # Define a one-to-many relationship.
        return $this->hasMany('App\Restaurant');
    }
}