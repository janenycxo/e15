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
        $locations = Location::orderBy('name')
            ->select(['id', 'name'])
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
            'slug' => 'required|unique:resturants,slug|alpha_dash',
            'name' => 'required',
            'year_open' => 'required|digits:4',
            'location' => 'required',
            'county' => 'required',
            'cuisine' => 'required',
            'meal' => 'required',
            'restaurant_url' => 'required|URL',
            'description' => 'required|min:255',
            'review' => 'required|min:255',
            'rating' => 'required|min:1',
     
        ]);
    /**
        * Add /restaurants
        * Process the form for adding a new restaurant
        */
        
        # Add the restaurant to the database
        $newRestaurant = new Restaurant();
        $newRestaurant->slug = $request->slug;
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

    public function show($slug)
    {
        $restaurant = Restaurant::where('slug', '=', $slug)->first();

        return view('restaurants.show')->with([
            'restaurant' => $restaurant,
            'slug' => $slug,
        ]);   
    }

    /**
     * edit
     */
    public function edit(Request $request, $restaurant)
    {
        $restaurant = Restaurant::where('slug', '=', $slug)->first();

        return view('restaurants.edit')->with([
            'restaurant' => $restaurant
        ]);
    }

    /**
     *update
     */
    public function update(Request $request, $restaurant)
    {
        $restaurant = Restaurant::where('slug', '=', $slug)->first();

        $restaurant->validate([
                'slug' => 'required|unique:restaurants,slug,'.$restaurant->id.'|alpha_dash',
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

        $Restaurant = new Restaurant();
        $Restaurant->slug = $request->slug;
        $Restaurant->name = $request->name;
        $Restaurant->year_open = $request->year_open;
        $Restaurant->location = $request->location_id;
        $Restaurant->county = $request->county;
        $Restaurant->cuisine = $request->cuisine;
        $Restaurant->meal = $request->meal;
        $Restaurant->restaurant_url = $request->restaurant_url;
        $Restaurant->description = $request->description;
        $Restaurant->review = $request->review;
        $Restaurant->rating = $request->rating;

        $Restaurant->save();

        return redirect('/restaurants/'.$slug.'/edit')->with([
            'flash-alert' => 'Your changes were saved.'
        ]);
    }
 
 
    //add delete restaurant

    public function delete($slug)
    {
        $restaurant = Restaurant::findBySlug($slug);

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
    public function destroy($slug)
    {
        $restaurant = Restaurant::findBySlug($slug);

        $restaurant->delete();

        return redirect('/restaurants')->with([
            'flash-alert' => '“' . $restaurant->name. '” was removed.'
        ]);
    }

    
}
