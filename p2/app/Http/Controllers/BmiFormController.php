<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller

$gender = ['Male', 'Female'];


if ($_GET['calculate bmi']) { 
   $weight = $_GET['weight'];
   $height = $_GET['height'];

   function BMI($weight,$height) {
      $BMI = 703 * $weight / ($height * $height);
      return $BMI;
   }   

      
   if ($BMI <= 18.5) {
       $output = "UNDERWEIGHT";

       } else if ($BMI > 18.5 AND $BMI<=24.9 ) {
       $output = "NORMAL";

       } else if ($BMI > 25 AND $BMI<=29.9) {
       $output = "OVERWEIGHT";

       } else if ($BMI > 30 AND $BMI<=39.9) {
       $output = "OBESE";

       } else if ($BMI > 40.0) {
       $output = "MORBIDLY OBESE";
   }
   echo "Your BMI value is  " . $BMI . "  and you are : "; 
   echo "$output";
}

$_SESSION['results'] = $results;


{
    


    public function index(Request $request) {
    
        $request->validate([
            'gender'  => 'required',
            'height' => 'required',
            'weight' => 'required'
        ]);
       
        
        $gender = $request->input('gender', null);
        $height = $request->input('height', null);
        $weight = $request->input('weight', null);

        $BMI = 703 * $weight / ($height * $height);
           
        $arr = range (18.5-24.9);
        $arr = range (25-25.9);
        $arr = range (30-39.9);
        $arr = range (>40);

        return view('homePage')->with([
            'gender' => $gender,
            'height' => $height,
            'weight' => $weight,
            'BMI' => $BMI
        ]);


    }

    public function show($bmiForm)
    {
       $bmiFormFound = true;
        
        return view('forms.show')->with(['bmiForm' => $bmiForm, 'bmiFormFound' => $bmiFormFound]);
    }
}