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
Route::get('/debug', function () {
    $debug = [
    'Environment' =>App::environment(),
    ];

try {
    $databases = DB::select('SHOW DATABASES;');
    $debug['Database connection test'] = 'PASSED';
    $debug['Databases'] = array_column($databases, 'Database');
} catch (Exception $e) {
    $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
}

    dump($debug);
});

Route::get('/cuisines', function () {
    return 'Here are all the different cuisines...';
});

Route::get('/eateries', function () {
    return 'Here are all the restaurants...';
});


Route::get('/locations', function () {
    return 'Here are all the locations...';
});

Route::get('/support', 'PageController@support');
Route::get('/cuisines', 'PageController@cuisines');
Route::get('/locations', 'PageController@locations');
Route::get('/list', 'PageController@locations');

# New route
Route::get('/example', function () {
    return 'hello there!';
});

# Existing route
Route::get('/', 'PageController@welcome');
 

# Add search route 
Route::get('/search', 'RestaurantController@search');
    

Route::group(['middleware' => 'auth'], function () {
    # Create a restaurant listing
    Route::get('/restaurants/create', 'RestaurantController@create');
    Route::post('/restaurants', 'RestaurantController@store');

    # Edit a listing
    Route::get('/restaurants/{slug}/edit', 'RestaurantController@edit');
    Route::put('/restaurants/{slug}', 'RestaurantController@update');

    # [... etc ...]
});


Route::get('/restaurants', 'RestaurantController@index');
Route::get('/restaurants/{name}', 'RestaurantController@show');
Auth::routes();

