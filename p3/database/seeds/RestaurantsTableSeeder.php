<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
use App\User;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->restaurant_name = 'milk-bar-east-village';
    $restaurant->year_open = '2008';
    $restaurant->location = '251 E 13th St New York, NY 10003 b/t 3rd Ave & 2nd Ave East Village';
    $restaurant->cuisine = 'Bakeries';
    $restaurant->meal = 'Brunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar';
    $restaurant->description = 'Milk Bar is a sweet (and occasionally savory) shop that’s been turning familiar treats upside down and on their heads, shaking up the dessert scene since 2008. Bon Appetit magazine called us one of the most exciting bakeries in the country.';
    $restaurant->review = 'Must get the cereal milk with the crunch!! It is a very small dessert spot and there is no indoor seating.';
    $restaurant->rating = 4;
    $restaurant->save();
    
    }
}

