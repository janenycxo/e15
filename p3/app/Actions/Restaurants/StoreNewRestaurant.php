<?php

namespace App\Actions\Restaurants;

use App\Restaurant;

class StoreNewRestaurant
{
    public function __construct($newRestaurantData)
    {
        $newRestaurant = new Restaurant();
        $newRestaurant->slug = $newRestaurantData->slug;
        $newRestaurant->name = $newRestaurantData->name;
        $newRestaurant->year_open = $newRestaurantData->year_open;
        //$newRestaurant->location = $newRestaurantData->location;
        $newRestaurant->county = $newRestaurantData->county;
        $newRestaurant->cuisine = $newRestaurantData->cuisine;
        $newRestaurant->meal = $newRestaurantData->meal;
        $newRestaurant->restaurant_url = $newRestaurantData->restaurant_url;
        $newRestaurant->description = $newRestaurantData->description ?? null;
        $newRestaurant->review = $newRestaurantData->review;
        $newRestaurant->rating = $newRestaurantData->rating;
        $newRestaurant->save();

        $this->rda = ['name' => $newRestaurant->name];
    }
}