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
    $restaurant->slug = 'the-milk-bar-east-village';
    $restaurant->name = 'Milk Bar East Village';
    $restaurant->year_open = '2008';
    $restaurant->location = '251 E 13th St New York, NY 10003 b/t 3rd Ave & 2nd Ave East Village';
    $restaurant->county = 'manhattan';
    $restaurant->cuisine = 'bakeries';
    $restaurant->meal = 'brunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar';
    $restaurant->description = 'Milk Bar is a sweet (and occasionally savory) shop that’s been turning familiar treats upside down and on their heads, shaking up the dessert scene since 2008. Bon Appetit magazine called us one of the most exciting bakeries in the country.';
    $restaurant->review = 'Must get the cereal milk with the crunch!! It is a very small dessert spot and there is no indoor seating.';
    $restaurant->rating = 4;
    $restaurant->save();
    


    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'toms';
    $restaurant->name = 'Toms';
    $restaurant->year_open = '1936';
    $restaurant->location = 'E 782 Washington Ave Brookly, NY 11238';
    $restaurant->county = 'brooklyn';
    $restaurant->cuisine = 'american';
    $restaurant->meal = 'breakfast';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/toms-brooklyn?osq=toms';
    $restaurant->description = 'A good classic neighborhood dinner with excellent breakfast staples. Eggs, omelettes, pancakes, waffles. All the basics done well with no fuss. Plates start at around $10 and the portions are huge. Pastrami with eggs easily had 1/3 lb of pastrami.';
    $restaurant->review = 'An old school place.  A diner without the diner like feel, you know what I mean.  Came in here on a whim for a weekday brunch.  Glad we did.  Its a pretty straight forward joint.  It gets to be busy between delivery, takeout  and dine-in.  Juggling all that, they do just fine, Imo.  Being around the block for awhile now, I expect that from them.';
    $restaurant->rating = 4;
    $restaurant->save();
        

    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'the-alcove';
    $restaurant->name = 'The Alcove';
    $restaurant->year_open = '2015';
    $restaurant->location = '41-11 49 St Sunnyside, NY 11104';
    $restaurant->county = 'queens';
    $restaurant->cuisine = 'gastropub';
    $restaurant->meal = 'brunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/the-alcove-sunnyside?osq=alcove';
    $restaurant->description = 'The place is small and a bit hard to navigate but it gave off a rustic and cozy backyard sort of comfort.';
    $restaurant->review = 'The food is delicious, the ambiance and appeal are comforting, but I truly believe the service adds to the magic. Look the bottom line is that there is something special about the Alcove and since we were in a rush I really could not pinpoint what it was.';
    $restaurant->rating = 5;
    $restaurant->save();


      # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'antonios-trattoria';
    $restaurant->name = 'Antonios Trattoria';
    $restaurant->year_open = '2007';
    $restaurant->location = '2370 Belmont Ave Bronx NY 10458';
    $restaurant->county = 'bronx';
    $restaurant->cuisine = 'italian';
    $restaurant->meal = 'lunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/antonios-trattoria-bronx?osq=Antonio%27s+Trattoria';
    $restaurant->description = 'Fresh Pastas, Italian Comfort Food, Family Atmosphere, Private Parties, Home Made Desserts. There is an element of novelty here since you are near arthur ave and it is an old school italian neighborhood. There is nothing wrong with that but you know I had to try it.';
    $restaurant->review = 'The food was solid and it has a straightforward interior.  Is a 5 star a stretch a little? Maybe. I have it in the 4 star range but I can definitely see why people love it.  I will definitely be back.';
    $restaurant->rating = 5;
    $restaurant->save();

     # Add a Restaurant listing
     $restaurant = new Restaurant();
     $restaurant->slug = 'taverna-on-the-bay';
     $restaurant->name = 'Taverna on the Bay';
     $restaurant->year_open = '2017';
     $restaurant->location = '661 Bay St Staten Island NY 10304';
     $restaurant->county = 'staten-island';
     $restaurant->cuisine = 'mediterranean';
     $restaurant->meal = 'dinner';
     $restaurant->restaurant_url = 'https://www.yelp.com/biz/taverna-on-the-bay-staten-island-5?osq=taverna+on+the+bay';
     $restaurant->description = 'Mediterranean Tavern and Seafood Restaurant, Wine Bar, Raw Bar, Private events, Private Party Room.
     Outdoor Seating.';
     $restaurant->review = 'When you sit down you are given fresh parmesan blocks off of a giant wheel, the most delicious olives, warm bread and butter. Dip your bread in the oil from olives. I wanted to drink it. And they will bring you more bread w/o an extra charge. You will need it to sop up the tasty sauces and things.';
     $restaurant->rating = 4;
     $restaurant->save();


    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'chickaLicious-dessert-bar';
    $restaurant->name = 'ChickaLicious Dessert Bar';
    $restaurant->year_open = '2003';
    $restaurant->location = '203 E 10th St New York NY 10003';
    $restaurant->county = 'manhattan';
    $restaurant->cuisine = 'cafe';
    $restaurant->meal = 'dessert';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/chikalicious-dessert-bar-new-york-3?osq=dessert';
    $restaurant->description = 'We were established as one of the first Dessert Only Bar, run by owners and couple, Chika and Don. Our mission was to show off the magic as it happens, showing customers how we prepare, plate and serve elegantly crafted and tasty desserts. Eat and drink alongside our jazz vibes for the perfect night out, whether date night or chill, relaxing evening.';
    $restaurant->review = 'Watch Chika do her magic from the counter and be prepared for some of the best desserts you will ever have.';
    $restaurant->rating = 5;
    $restaurant->save();


    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'clinton-street-baking-company';
    $restaurant->name = 'Clinton Street Baking Company';
    $restaurant->year_open = '2001';
    $restaurant->location = '4 Clinton St New York NY 10002';
    $restaurant->county = 'manhattan';
    $restaurant->cuisine = 'american';
    $restaurant->meal = 'breakfast';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/clinton-street-baking-company-new-york-5?osq=%27Clinton+Street+Baking+Company%27';
    $restaurant->description = 'World famous for our breakfast and brunch dishes, including pancakes, eggs benedict, brioche french toast, buttermilk fried chicken & waffles, and house made burgers and fries.';
    $restaurant->review = 'Now the German Chocolate Cake - this cake is insane. Seriously, it was some of the most overwhelming, rich, dense cake I have ever had, and I mean all those adjectives in the most complimentary way possible. It was really one of the most satisfying slices of cake I ever had, but it left me feeling pretty destroyed.';
    $restaurant->rating = 4;
    $restaurant->save();

    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'raclette';
    $restaurant->name = 'Raclette';
    $restaurant->year_open = '2015';
    $restaurant->location = '511 E 12th St New York, NY 10009';
    $restaurant->county = 'manhattan';
    $restaurant->cuisine = 'french';
    $restaurant->meal = 'lunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/raclette-new-york?osq=%27Raclette%27';
    $restaurant->description = 'Tableside cheese scrape ; cheese wheel ; Swiss and French raclette ; tartines ; croques ; French sandwiches : steaks ; burgers ; charcuterie ; roasted vegetables ; croque monsieur ; vegetarian dishes ; salads ; soups.';
    $restaurant->review = 'Today I died and went to heaven. Ok I did not actually die but the minute I saw the waiter walk toward my table with a cheese wheel and a scraper in hand I could not have taken my phone out any faster LOL. not gonna lie, I posted it on my Instagram story and I got so many DMs about where this place was and how good it looked.';
    $restaurant->rating = 4;
    $restaurant->save();

    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'guadlupe-restaurant';
    $restaurant->name = 'Guadalupe Restaurant';
    $restaurant->year_open = '2004';
    $restaurant->location = '597 W 207 St New York, NY 10034';
    $restaurant->county = 'manhattan';
    $restaurant->cuisine = 'mexican';
    $restaurant->meal = 'dinner';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/guadalupe-restaurant-new-york-3?osq=%27Guadalupe+Restaurant';
    $restaurant->description = 'Guadalupe is well know by its fabulous skirt steak (Churrasco).,Monday happy hour all day 2x1 p/p!!.,Tuesday Noches de Vinos y Balasas with Obrian Luna.,Wednesday Surf & Turf for only $19.95,Thurday Ladies Night!! happy hour 2x1 p/p all night for the ladies.';
    $restaurant->review = 'Here at Guadalupe it is always been about the customers,always trying to give them the best food & drinks at the best prices,along with a high quality service,this is what has made us number one!!.';
    $restaurant->rating = 4;
    $restaurant->save();

    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'haswell-greens';
    $restaurant->name = 'Haswell Greens';
    $restaurant->year_open = '2018';
    $restaurant->location = '240 W 52nd St New York, NY 10019';
    $restaurant->county = 'manhattan';
    $restaurant->cuisine = 'cocktail-bar';
    $restaurant->meal = 'happy-hour';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/milk-bar-east-village-new-york-2?osq=Momofuku+Milk+Bar';
    $restaurant->description = 'Haswell Greens with craft cocktail culture, focusing on time-honored favorites with added twists. HG is at the forefront of cocktails and beer culture for Broadway NYC, bringing inventive cocktails and an ever changing craft beer selection for locals and tourists alike.';
    $restaurant->review = 'A place where you can enjoy an expertly made classic cocktail or try our Amazing pizzas, live music 6 nights a week, dueling pianos, Friday Saturday Sunday nights from 9 pm till late. Brunch Saturday and Sunday 11 am till 4 pm. We have a live Drag show 21 and older only, Saturday and Sunday 12:30 pm seating, the show starts at 1 pm. Book your table on Open table.';
    $restaurant->rating = 5;
    $restaurant->save();

    $restaurant = new Restaurant();
    $restaurant->slug = 'madame-sousou-cafe';
    $restaurant->name = 'Madame Sousou Cafe';
    $restaurant->year_open = '2014';
    $restaurant->location= '31-05 33 St Astoria NY 11106';
    $restaurant->county = 'queens';
    $restaurant->cuisine = 'cafe';
    $restaurant->meal = 'brunch';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/madame-sousou-cafe-astoria';
    $restaurant->description = 'At Madame Sousou, we provide quality coffee drinks and a delicious selection of pastries and cakes for the community. With a passion for baking tasty things, our chef creates beautiful treats that keep guests coming back for more.';
    $restaurant->review = 'Whether you are craving a donut, a morning coffee, or both, you can count on enjoying a heartwarming meal when you visit.';
    $restaurant->rating = 4;
    $restaurant->save();

    # Add a Restaurant listing
    $restaurant = new Restaurant();
    $restaurant->slug = 'pates-et-traditions';
    $restaurant->name = 'Pates et Traditions';
    $restaurant->year_open = '2008';
    $restaurant->location = '52 Havemeyer St Brooklyn NY 11211';
    $restaurant->county = 'brooklyn';
    $restaurant->cuisine = 'french';
    $restaurant->meal = 'dessert';
    $restaurant->restaurant_url = 'https://www.yelp.com/biz/pates-et-traditions-brooklyn';
    $restaurant->description = 'We prepare old school French crepes , authentique receipes , from my grand mother!! Fresh pastas also and more ... We focus on quality , quantity and good prices .. And of course a very friendly and good service See you soon A bientot.';
    $restaurant->review = 'The items were built beautifully, and despite being a French cuisine...their portions are generous and filling. The strawberries and bananas were plentiful and the sud ouest had plenty of slices of cheese melted to a gooey consistency and perfectly peeked out of the dark crepe envelope.';
    $restaurant->rating = 5;
    $restaurant->save();
    
    
      
    }
  }

 
 
    

