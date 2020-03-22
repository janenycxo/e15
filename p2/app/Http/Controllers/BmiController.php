<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Arr;

class BmiController extends Controller
{
    public function index(Request $request) 
{
  
  $request->validate([
    'gender' => 'required',
    'heightInches' => 'required',
    'weight' => 'required',
]);

$gender = $request->input('gender', null);
$heightInches = $request->input('heightInches', null);
$weight = $request->input('weight',null);

$BodyMassIndex = $weight/($heightInches * $heightInches)*703;

return view('forms.index')->with([
    'BodyMassIndex' => $BodyMassIndex,
    'gender' => $gender,
    'heightInches' => $heightInches,
    'weight' => $weight,
   
]);
}  

  } 
   