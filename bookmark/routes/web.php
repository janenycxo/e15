<?php

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

Route::get('/example', function () {
    $foo = [1,2,3];

    #dump, die
    //dd($foo);

    #dump, die, debug
    //ddd($foo);

    Log::info($foo);

    return view('abc');
});

Route::get('/', 'PageController@welcome');


Route::get('/books', 'BookController@index');
Route::get('/books/{title?}', 'BookController@show');
Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');


