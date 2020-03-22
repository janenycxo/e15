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
    'heightFeet' => 'required',
    'heightInches' => 'required',
    'weight' => 'required',
]);

$gender = $request->input('gender', null);
$heightFeet = $request->input('heightFeet', null);
$heightInches = $request->input('heightInches',null);
$weight = $request->input('weight',null);

$BodyMassIndex = $weight/($heightFeet + $heightInches * $heightFeet + $heightInches)*703;

return view('forms.index')->with([
    'BodyMassIndex' => $BodyMassIndex,
    'gender' => $gender,
    'heightFeet' => $heightFeet,
    'heightInches' => $heightInches,
    'weight' => $weight,
   
]);
}  

  }
   