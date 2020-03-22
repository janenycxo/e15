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
//Home
Route::get('/', 'PageController@index');

Route::get('/forms', 'BmiController@index');
Route::get('/forms/{BodyMassIndex?}', 'BmiController@show');
  

//BMI Calculator
//Route::get('/bmi', 'HomeController@bmi');
//Route::get('/bmi/{title?}', 'HomeController@show');
 
 
//return [
   // '/' => ['AppController', 'index'],
   // '/save-new-result'=> ['AppController', 'saveNewResult'],
   // '/selections' => ['AppController', 'selections'],
   // '/selection' => ['AppController', 'selection'],
    
// ]; 

