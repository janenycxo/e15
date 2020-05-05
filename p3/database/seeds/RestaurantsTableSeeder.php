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
        # Array of restaurant data to add
    $restaurants = [
    ['Milk Bar East Village', '2008', 'Bakeries', 'Brunch','251 E 13th St New York, NY 10003 b/t 3rd Ave & 2nd Ave East Village', 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar'],
    ['ChickaLicious Dessert Bar', '2003', 'Coffee', 'Dessert', '203 E 10th St New York, NY 10003', 'https://www.yelp.com/biz/chikalicious-dessert-bar-new-york-3?osq=dessert'],
    ['Clinton Street Baking COmpany', '2001', 'American', 'Breakfast', '4 Clinton St New York, NY 10002','https://www.yelp.com/search?find_desc=&find_loc=New+York%2C+NY'],
    ['Raclette', '2012', 'French', 'Lunch', '511 E 12th St New York, NY 10009' ,'https://www.yelp.com/biz/raclette-new-york'],
    ['Guadalupe Restaurant', '2004', 'Mexican', 'Dinner', '597 W 207 St New York, NY 10034' ,'https://www.yelp.com/biz/guadalupe-restaurant-new-york-3?osq=guadalupe+restaurant'],
    ['Haswell Greens', '2019', 'Cocktails', 'Happy Hour', '240 W 52 St New York, NY 10019' ,'https://www.yelp.com/biz/haswell-greens-new-york-3'],
    ['Alta', '2010', 'Mediterranean', 'Tapas', 'https://www.yelp.com/biz/alta-new-york?osq=alta']
];

$count =count($restaurants);

# Loop through each author, adding them to the database
foreach ($restaurants as $restaurantData) {
    $restaurant = new Restaurant();
    $restaurant->restaurant_name = $restaurantData[0];
    $restaurant->year_opened = $restaurantData[1];
    $restaurant->cuisine = $restaurantData[2];  
    $restaurant->meal = $restaurantData[3];
    $restaurant->location = $restaurantData[4];
    $restaurant->updated_at = $restaurantData[5];
    $restaurant->save();
    $restaurant--;
}
}
}

