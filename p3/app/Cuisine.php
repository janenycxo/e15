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
        return $this->belongsTo('App\Cuisine');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')
        ->withTimestamps() # Must be added to have Eloquent update the created_at/updated_at columns in a pibot table
        ->withPivot('notes'); # Must also specify any other fields that should be included when fetching this relationship
    }

    public static function findBySlug($slug)
    {
        return self::where('slug', '=', $slug)->first();
    }
}