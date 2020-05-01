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

# New route
Route::get('/example', function () {
    return 'hello there!';
});

# Existing route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/restaurants', 'RestaurantController@index');
Route::get('/restaurants/{name}', 'RestaurantController@show');
Auth::routes();


Auth::routes();
