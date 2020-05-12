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
    $restaurant->slug = 'bliss-bomb';
    $restaurant->name = 'Bliss Bomb';
    $restaurant->year_open = '2020';
    $restaurant->location = '191 Columbia St Brooklyn, NY 11231';
    $restaurant->county = 'manhattan';
    $restaurant->cuisine = 'bakeries';
    $restaurant->meal = 'brunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar';
    $restaurant->description = 'We are flavor geeks who set out to make a better donut. Amid a sea of donuts and other treats that are simply soft and sweet, we are infusing intense flavors in our base donuts, glazes and toppings to hit all the senses.';
    $restaurant->review = 'BlissBomb baked mini donuts are conceived and handcrafted by a professional pastry chef using real fruits, nuts, juices and spices to create full-bodied flavors, from base to topping. Our donuts are baked, not fried. Frying puts an oily flavor in donuts. A fried donut absorbs up to 25% of its weight from oil, which masks the flavor of the dough.';
    $restaurant->rating = 4;
    $restaurant->save();
    
    $restaurantData = file_get_contents(database_path('restaurants.json'));
    $restaurants = json_decode($restaurantData, true);

    $count = count($restaurants);
    foreach ($restaurants as $slug => $restaurantData) {

        $name = explode(' ', $restaurantData['location']);
        $county = array_pop($name);

        # Find that author in the authors table
        $restaurant_id = Restaurant::where('name', '=', $name)->pluck('id')->first();

        $restaurant = new Restaurant();
        $restaurant->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $restaurant->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $restaurant->slug = $slug;
        $restaurant->name = $restaurantData['name'];
        $restaurant->year_open = $restaurantData['year_open'];
        $restaurant->location = $restaurantData['location'];
        $restaurant->county = $restaurantData['county'];
        $restaurant->cuisine = $restaurantData['cuisine'];
        $restaurant->meal = $restaurantData['meal'];
        $restaurant->restaurant_url = $restaurantData['restaurant_url'];
        $restaurant->description = $restaurantData['description'];
        $restaurant->review = $restaurantData['review'];
        $restaurant->rating = $restaurantData['rating'];
        
        $restaurant->save();
        $count--;
    }

    
    }
}

    

