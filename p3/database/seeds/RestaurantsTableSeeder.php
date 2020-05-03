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
        # Add a restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'milk-bar-east-village';
    $restaurant->name = 'Milk Bar East Village';
    $restaurant->cuisine = 'Bakeries, Desserts, Cafe';
    $restaurant->year_opened = 2008;
    $restaurant->meal = 'brunch';
    $restaurant->credit = 'yes';
    $restaurant->onlineorder = 'yes';
    $restaurant->description = 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar';
    $restaurant->location = '251 E 13th St New York, NY 10003 b/t 3rd Ave & 2nd Ave East Village';
    $restaurant->save();

      }
}