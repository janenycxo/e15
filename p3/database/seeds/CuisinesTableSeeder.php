<?php

use Illuminate\Database\Seeder;
use App\Cuisine; 
use App\User;

class CuisinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    # Add a cuisine 
    $cuisines = [
        ['Milk Bar East Village', 'Bakery', 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar'],
        ['ChickaLicious Dessert Bar', 'Coffee', 'https://www.yelp.com/biz/chikalicious-dessert-bar-new-york-3?osq=dessert'],
        ['Clinton Street Baking Company', 'American', 'https://www.yelp.com/search?find_desc=&find_loc=New+York%2C+NY'],
        ['Raclette', 'French', 'https://www.yelp.com/biz/raclette-new-york'],
        ['Guadalupe Restaurant', 'Mexican', 'https://www.yelp.com/biz/guadalupe-restaurant-new-york-3?osq=guadalupe+restaurant'],

];

$count = count($cuisines);
    
# Loop through each location, adding them to the database
foreach ($cuisines as $cuisineData) {
    $cuisine = new Location();
    
    $cuisine->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
    $cuisine->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
    $cuisine->name = $cuisineData[0];
    $cuisine->cuisine = $cuisineData[1];
    $cuisine->restaurant_url = $cuisineData[2];
    $cuisine->save();
    
    $count--;
    }
}
}
