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
            ['Milk Bar East Village', 'Brunch', '251 E 13th St New York NY 10003 b/t 3rd Ave & 2nd Ave East Village', 'Manhattan'],
            ['ChickaLicious Dessert Bar', 'Dessert', '203 E 10th St New York NY 10003', 'Manhattan'],
            ['Clinton Street Baking Company', 'Breakfast', '4 Clinton St New York NY 10002', 'Manhattan'],
            ['Raclette', 'Lunch', '511 E 12th St New York NY 10009', 'Manhattan'],
            ['Guadalupe Restaurant', 'Dinner', '597 W 207 St New York NY 10034', 'Manhattan'],

    ];

    $count = count($locations);
        
    # Loop through each location, adding them to the database
    foreach ($locations as $locationData) {
        $location = new Location();
        
        $location->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $location->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $location->name = $locationData[0];
        $location->meal = $locationData[1];
        $location->location = $locationData[2];
        $location->county = $locationData[3];
        $location->save();
        
        $count--;
    }
}
}


        
