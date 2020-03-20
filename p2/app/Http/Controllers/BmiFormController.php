<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiFormController extends Controller

{  
    public function index(Request $request) {
    
        $request->validate([
            'gender'  => 'required',
            'height' => 'required',
            'weight' => 'required'
        ]);
                          
            $gender = $_GET['gender'];
            $weight = $_GET['weight'];
            $height = $_GET['height'];
            
            $BodyMassIndex = $weight/($height*$height);
               
        $arr = range (18.5-24.9);
        $arr = range (25-25.9);
        $arr = range (30-39.9);
        $arr = range (40-51);
 
        return view('bmi.index')->with([
            'gender' => $gender,
            'height' => $height,
            'weight' => $weight,
            'BodyMassIndex' => $BodyMassIndex
        ]);


    }
    

    public function show($title)
    {
       $bmiFound = true;
        
        return view('bmi.show')->with(['title' => $title, 'bmiFound' => $bmiFound]);
    }
}