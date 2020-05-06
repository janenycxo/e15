<?php

namespace App;
use Arr;
use Str;
use App\Restaurant;
use App\Location;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function cuisine()
    {
        # Restaurants include different cuisines and locations
        # Define a one-to-many relationship.
        return $this->belongsTo('App\Cuisine');
    }

    public static function findByMeal($meal)
    {
        return self::where('meal', '=', $meal)->first();
    }

    
}
