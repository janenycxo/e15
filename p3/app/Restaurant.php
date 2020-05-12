<?php

namespace App;
use Arr;
use Str;
use App\Restaurant;
use App\Location;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function location()
    {
        # Restaurants include different cuisines and locations
        # Define a one-to-many relationship.
        return $this->belongsTo('App\location');
    }

    public static function findBySlug($slug)
    {
        return self::where('slug', '=', $slug)->first();
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User')
        ->withTimestamps()
        ->withPivot('review'); 
    }
}
