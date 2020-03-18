<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller


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

        $arr = range (18.5-24.9);
        $arr = range (25-25.9);
        $arr = range (30-39.9);
        $arr = range (40-42);

        $BMI = 703 * $weight / ($height * $height);
           
        return view('forms.index')->with
        ([
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