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
    $restaurant->name = 'milk-bar-east-village';
    $restaurant->year_open = '2008';
    $restaurant->location = '251 E 13th St New York, NY 10003 b/t 3rd Ave & 2nd Ave East Village';
    $restaurant->borough = 'Manhattan';
    $restaurant->cuisine = 'Bakeries';
    $restaurant->meal = 'Brunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar';
    $restaurant->description = 'Milk Bar is a sweet (and occasionally savory) shop that’s been turning familiar treats upside down and on their heads, shaking up the dessert scene since 2008. Bon Appetit magazine called us one of the most exciting bakeries in the country.';
    $restaurant->review = 'Must get the cereal milk with the crunch!! It is a very small dessert spot and there is no indoor seating.';
    $restaurant->rating = 4;
    $restaurant->save();
    


    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->name = 'toms';
    $restaurant->year_open = '1936';
    $restaurant->location = 'E 782 Washington Ave Brookly, NY 11238';
    $restaurant->borough = 'Brooklyn';
    $restaurant->cuisine = 'American';
    $restaurant->meal = 'Breakfast';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/toms-brooklyn?osq=toms';
    $restaurant->description = 'A good classic neighborhood dinner with excellent breakfast staples. Eggs, omelettes, pancakes, waffles. All the basics done well with no fuss. Plates start at around $10 and the portions are huge. Pastrami with eggs easily had 1/3 lb of pastrami.';
    $restaurant->review = 'An old school place.  A diner without the diner like feel, you know what I mean.  Came in here on a whim for a weekday brunch.  Glad we did.  Its a pretty straight forward joint.  It gets to be busy between delivery, takeout  and dine-in.  Juggling all that, they do just fine, Imo.  Being around the block for awhile now, I expect that from them.';
    $restaurant->rating = 4;
    $restaurant->save();
        

    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->name = 'the-alcove';
    $restaurant->year_open = '2015';
    $restaurant->location = '41-11 49 St Sunnyside, NY 11104';
    $restaurant->borough = 'Queens';
    $restaurant->cuisine = 'Gastropub';
    $restaurant->meal = 'Brunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/the-alcove-sunnyside?osq=alcove';
    $restaurant->description = 'The place is small and a bit hard to navigate but it gave off a rustic and cozy backyard sort of comfort.';
    $restaurant->review = ' The food is delicious, the ambiance and appeal are comforting, but I truly believe the service adds to the magic. Look the bottom line is that there is something special about the Alcove and since we were in a rush I really could not pinpoint what it was.';
    $restaurant->rating = 5;
    $restaurant->save();


      # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->name = 'Antonios-Trattoria';
    $restaurant->year_open = '2007';
    $restaurant->location = '2370 Belmont Ave Bronx NY 10458';
    $restaurant->borough = 'Bronx';
    $restaurant->cuisine = 'Italian';
    $restaurant->meal = 'Lunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/antonios-trattoria-bronx?osq=Antonio%27s+Trattoria';
    $restaurant->description = 'Fresh Pastas, Italian Comfort Food, Family Atmosphere, Private Parties, Home Made Desserts. There is an element of novelty here since you are near arthur ave and it is an old school italian neighborhood. There is nothing wrong with that but you know I had to try it.';
    $restaurant->review = 'The food was solid and it has a straightforward interior.  Is a 5 star a stretch a little? Maybe. I have it in the 4 star range but I can definitely see why people love it.  I will definitely be back.';
    $restaurant->rating = 5;
    $restaurant->save();

     # Add a Restaurant listing
     $restaurant = new Restaurant();
     $restaurant->name = 'Taverna-on-the-Bay';
     $restaurant->year_open = '2017';
     $restaurant->location = '661 Bay St Staten Island NY 10304';
     $restaurant->borough = 'Staten Islant';
     $restaurant->cuisine = 'Mediterranean';
     $restaurant->meal = 'Dinner';
     $restaurant->restaurant_url = 'https://www.yelp.com/biz/taverna-on-the-bay-staten-island-5?osq=taverna+on+the+bay';
     $restaurant->description = 'Mediterranean Tavern and Seafood Restaurant, Wine Bar, Raw Bar, Private events, Private Party Room.
     Outdoor Seating.';
     $restaurant->review = 'When you sit down you are given fresh parmesan blocks off of a giant wheel, the most delicious olives, warm bread and butter. Dip your bread in the oil from olives. I wanted to drink it. And they will bring you more bread w/o an extra charge. You will need it to sop up the tasty sauces and things.';
     $restaurant->rating = 4;
     $restaurant->save();




    }
}

