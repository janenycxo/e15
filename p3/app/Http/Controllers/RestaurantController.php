<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Arr;
use Str;
use App\Restaurant;
use App\Location;

class RestaurantController extends Controller
{
    
    public function create(Request $request)
    {
        # Get restaurants for our dropdown
        $locations = Location::orderBy('name')
            ->select(['id'])
            ->get();

        return view('restaurants.create')->with([
            'locations' => $locations
        ]);
    }


    /**
    * POST /restaurants
    * Process the form for adding a new restaurant
    */
    public function store(Request $request)
    {
            $request->validate([
            'name' => 'required',
            'year_open' => 'required|digits:4',
            'location' => 'required',
            'county' => 'required',
            'cuisine' => 'required',
            'meal' => 'required',
            'restaurant_url' => 'required',
            'description' => 'required|min:50',
            'review' => 'required|min:50',
            'rating' => 'required|min:1',
     
        ]);
    /**
        * Add /restaurants
        * Process the form for adding a new restaurant
        */
        
        # Add the restaurant to the database
        $newRestaurant = new Restaurant();
        $newRestaurant->name = $request->name;
        $newRestaurant->year_open = $request->year_open;
        $newRestaurant->location = $request->location;
        $newRestaurant->county = $request->county;
        $newRestaurant->cuisine = $request->cuisine;
        $newRestaurant->meal = $request->meal;
        $newRestaurant->restaurant_url = $request->restaurant_url;
        $newRestaurant->description = $request->description;          
        $newRestaurant->review = $request->review;
        $newRestaurant->rating = $request->rating;
        
        $newRestaurant->save();

        return redirect('/restaurants/create')->with([
            'flash-alert' => 'Your restaurant '.$newRestaurant->name.' was added.'
        ]);
    }

    /**
     * GET /search
     */
    public function search(Request $request)
    {
        $request->validate([
            'searchTerms' => 'required',
            'searchType' => 'required',
        ]);

      
        $searchResults = [];

        $searchTerms = $request->input('searchTerms', null);
        $searchType = $request->input('searchType', null);
        
        $searchResults = Restaurant::where($searchType, 'LIKE', $searchTerms)->get();  
        return redirect('/')->with([
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }


    /**
     * GET /restaurant list
     */
    public function list()
    {
        # TODO
        return view('restaurants.list');
    }

    /**
     * GET /all restaurants in collection
     */
    public function index()
    {
        # Query DB alphabetical listing of all the restaurants in database
        $restaurants = Restaurant::orderBy('name')->get();
        # Query existing restaurants for the 3 most recently added listings
        $newRestaurants = $restaurants->sortByDesc('created_at')->take(3);
        return view('restaurants.index')->with([
            'restaurants' => $restaurants,
            'newRestaurants' => $newRestaurants
        ]);
    }



 /**
     * GET 
     * Show the details for an individual restaurant
     */
    public function show($restaurant)
    {
        $restaurant = Restaurant::where('name', '=', $name)->first();

        return view('restauants.show')->with([
            'name' => $name,
            'restaurant_url' => $restaurant_url,
        ]);
    }

    /**
     * edit
     */
    public function edit(Request $request, $restaurant)
    {
        $restaurant = Restaurant::where('name', '=', $name)->first();

        return view('restaurants.edit')->with([
            'restaurant' => $restaurant
        ]);
    }

    /**
     *update
     */
    public function update(Request $request, $restaurant)
    {
        $restaurant = Restaurant::where('name', '=', $name)->first();

        $restaurant->validate([
                'name' => 'required',
                'year_open' => 'required|digits:4',
                'location' => 'required',
                'county' => 'required',
                'cuisine' => 'required',
                'meal' => 'required',
                'restaurant_url' => 'required|url',
                'description' => 'required|min:50',
                'review' => 'required|min:50',
                'rating' => 'required|min:1',
        ]);

        $newRestaurant = new Restaurant();
        $newRestaurant->name = $request->name;
        $newRestaurant->year_open = $request->year_open;
        $newRestaurant->location = $request->location_id;
        $newRestaurant->county = $request->county;
        $newRestaurant->cuisine = $request->cuisine;
        $newRestaurant->meal = $request->meal;
        $newRestaurant->restaurant_url = $request->restaurant_url;
        $newRestaurant->description = $request->description;
        $newRestaurant->review = $request->review;
        $newRestaurant->rating = $request->rating;

        $newRestaurant->save();

        return redirect('/restaurants/'.$restaurant.'/edit')->with([
            'flash-alert' => 'Your changes were saved.'
        ]);
    }
 
 
    //add delete restaurant

    /**
    * confirm whether user wishes to delete the restaurant listing
    * delete
    */
    public function delete($restaurant)
    {
        $restaurant = Restaurant::findBySlug($restaurant);

        if (!$restaurant) {
            return redirect('/restaurants')->with([
                'flash-alert' => 'Restaurant not found'
            ]);
        }

        return view('restaurants.delete')->with([
            'restaurant' => $restaurant,
        ]);
    }
 
    //add confirm delete restaurant
    /**
    * Deletes the restaurant
    * DELETE 
    */
    public function destroy($restaurant)
    {
        $restaurant = Restaurant::findByRestaurant($restaurant);

        $restaurant->delete();

        return redirect('/restaurants')->with([
            'flash-alert' => '“' . $restaurant->name. '” was removed.'
        ]);
    }

    
}
