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



# New route
Route::get('/example', function () {
    return 'hello there!';
});

# Existing route
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
