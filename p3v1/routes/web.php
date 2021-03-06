<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/debug', function () {

    //$debug = [
        //'Environment' => App::environment(),
    //];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    //try {
        //$databases = DB::select('SHOW DATABASES;');
        //$debug['Database connection test'] = 'PASSED';
        //$debug['Databases'] = array_column($databases, 'Database');
    //} catch (Exception $e) {
        //$debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    //}

    //dump($debug);
//}); 

    Route::get('/', function () {
        return view ('welcome');
    });


/**
 * Miscellaneous mostly-static pages
 */
    //Route::get('/', 'PageController@welcome');
    //Route::get('/support', 'PageController@support');


/**
 * Restaurants
 */
    //Route::group(['middleware' => 'auth'], function () {
    # Add a restaurant
    //Route::get('/restaurants/create', 'RestaurantController@create');
    //Route::post('/restaurants', 'RestaurantController@store');

    # Update a restaurant
    //Route::get('/restaurants/{slug}/edit', 'RestaurantController@edit');
    //Route::put('/restaurants/{slug}', 'RestaurantController@update');

    # Show list of restaurants
    //Route::get('/restaurants', 'RestaurantController@index');

    # Search for a restaurant
    //Route::get('/search}', 'RestaurantController@search');//

    # Delete
    //Route::get('/restaurant/{slug}/delete', 'RestaurantController@delete');

    # Process deletion of restaurant
    //Route::delete('/restaurant/{slug}', 'RestaurantController@destroy');
    //});

    
    /**
     * List routes
     */
    # Show your list
    //Route::get('/list', 'ListController@show');

    # Page to add a restaurant to your list
    //Route::get('/list/{slug?}/add', 'ListController@add');

    # Process adding a restaurant to your list
    //Route::post('/list/{slug?}/add', 'ListController@save');


    # Misc
    ///Route::get('/search', 'RestaurantController@search');
    //Route::get('/list', 'RestaurantController@list');



    //Auth::routes();