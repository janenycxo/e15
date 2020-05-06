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
            ['Milk Bar East Village', '2008', 'Brunch', '251 E 13th St New York, NY 10003 b/t 3rd Ave & 2nd Ave East Village'],
            ['ChickaLicious Dessert Bar', '2003', 'Dessert', '203 E 10th St New York, NY 10003'],
            ['Clinton Street Baking Company', '2001', 'Breakfast', '4 Clinton St New York, NY 10002'],
            ['Raclette', '2012', 'Lunch', '511 E 12th St New York, NY 10009'],
            ['Guadalupe Restaurant', '2004', 'Dinner', '597 W 207 St New York, NY 10034'],

    ];

    $count = count($locations);
        
    # Loop through each location, adding them to the database
    foreach ($locations as $locationData) {
        $location = new Location();
        
        $location->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $location->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $location->restaurant_name = $locationData[0];
        $location->meal = $locationData[1];
        $location->location = $locationData[2];
        $location->save();
        
        $count--;
    }
}
}


        
