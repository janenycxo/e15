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
Route::get('/', 'HomeController@index');
  

//BMI Calculator
Route::get('/bmi', 'BmiFormController@index');
Route::get('/bmi/{title?}', 'BmiFormController@show');
 

//return [
   // '/' => ['AppController', 'index'],
   // '/save-new-result'=> ['AppController', 'saveNewResult'],
   // '/selections' => ['AppController', 'selections'],
   // '/selection' => ['AppController', 'selection'],
    
// ]; 

