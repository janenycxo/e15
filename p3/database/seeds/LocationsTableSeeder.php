<?php

use Illuminate\Database\Seeder;
use App\Location; 
use App\User;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    # Add a location 
    $locations = [
            ['Milk Bar East Village', '2008', 'Bakeries', 'Brunch', '251 E 13th St New York, NY 10003 b/t 3rd Ave & 2nd Ave East Village', 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar'],
            ['ChickaLicious Dessert Bar', '2003', 'Coffee', 'Dessert', '203 E 10th St New York, NY 10003', 'https://www.yelp.com/biz/chikalicious-dessert-bar-new-york-3?osq=dessert'],
            ['Clinton Street Baking Company', '2001', 'American', 'Breakfast', '4 Clinton St New York, NY 10002','https://www.yelp.com/search?find_desc=&find_loc=New+York%2C+NY'],
            ['Raclette', '2012', 'French', 'Lunch', '511 E 12th St New York, NY 10009' ,'https://www.yelp.com/biz/raclette-new-york'],
            ['Guadalupe Restaurant', '2004', 'Mexican', 'Dinner', '597 W 207 St New York, NY 10034' ,'https://www.yelp.com/biz/guadalupe-restaurant-new-york-3?osq=guadalupe+restaurant'],

    ];

    $count = count($locations);
        
    # Loop through each location, adding them to the database
    foreach ($locations as $locationData) {
        $location = new Location();
        
        $location->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $location->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $location->restaurant_name = $locationData[0];
        $location->cuisine = $locationData[1];
        $location->meal = $locationData[2];
        $location->location = $locationData[3];
        $location->restaurant_url = $locationData[4];
        $location->save();
        
        $count--;
    }
}
}


        
