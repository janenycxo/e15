<?php

namespace App;
use Arr;
use Str;
use App\Restaurant;
use App\Location;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model

{
    public function restaurants()
    {
        # Location of restaurant
        # Define an inverse one-to-many relationship.
        return $this->hasMany('App\Restaurant');
    }
    
}