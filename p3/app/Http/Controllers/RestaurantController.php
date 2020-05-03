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
        # Get Restaurants for our dropdown
        $locations = location::orderBy('county')
            ->select(['id', 'borough'])
            ->get();

        return view('restaurant.create')->with([
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
            'name'=> 'required',
            'cuisine' => 'required',
            'location_id' => 'required',
            'established_year' => 'required|digits:4',
            'cover_url' => 'url',
            'info_url' => 'url',
            'details_url' => 'required|url',
            'description' => 'required|min:255'
        ]);
    /**
        * Add /restaurants
        * Process the form for adding a new restaurant
        */
        
        # Add the restaurant to the database
        $newRestaurant = new Restaurant();
        $newRestaurant->name = $request->name;
        $newRestaurant->cuisine = $request->cuisine;
        $newRestaurant->location_id = $request->location_id;
        $newRestaurant->established_year = $request->established_year;
        $newRestaurant->cover_url = $request->cover_url;
        $newRestaurant->info_url = $request->info_url;
        $newRestaurant->details_url = $request->details_url;
        $newRestaurant->description = $request->description;
        $newRestaurant->save();

        return redirect('/restaurants/create')->with([
            'flash-alert' => 'Your restaurant '.$newRestaurantnewBook->name.' was added.'
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
        
        $restaurantData = file_get_contents(database_path('restaurants.json'));
    
        $restaurants = json_decode($restaurantData, true);
    
        $searchResults = array_filter($restaurants, function ($restaurant) use ($searchTerms, $searchType) {
            return Str::contains(strtolower($book[$searchType]), strtolower($searchTerms));
        });

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
        $restaurants = Restaurant::orderBy('name')->get();

       $newRestaurants = $restaurants->sortByDesc('created_at')->take(3);
        
        return view('restaurants.index')->with([
            'restaurants' => $restaurants,
            'newRestaurants' => $newRestaurants
        ]);
    }

 //add delete restaurant
 //add confirm delete restaurant



/**
* GET /restaurant/{name}
*/
public function show($name)
{
    return 'Here are the details for the restaurant: ' . $name;

    //return view('restaurants.show')->with([
     //   'name' => $name
    //]);


}
}
