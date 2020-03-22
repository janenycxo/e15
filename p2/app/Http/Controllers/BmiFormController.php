<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiFormController extends Controller

{  
    public function index(Request $request) {
    
        $request->validate([
            'gender' => 'required',
            'heightFeet' => 'required',
            'heightInches' => 'required',
            'weight' => 'required',
        ]);


        $gender = $request->input('gender', null);
        $heightFeet = $request->input('heightFeet', null);
        $heightInches = $request->input('heightInches', null);
        $weight = $request->input('weight', null);

        $BodyMassIndex = $weight/($height * $height)*703;
        //formula to calculate BMI: weight/(height x height) x 703
        
        return view('bmi.index')->with([
            'gender' => null,
            'heightFeet' => null,
            'heightInches' => null,
            'weight' => null,
            'result' => $result,
]);
}
        
public function show($title) {
        //        
    }
}