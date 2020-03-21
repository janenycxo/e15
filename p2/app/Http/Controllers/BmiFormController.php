<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiFormController extends Controller

{  
    public function index(Request $request) {
    
        $result = $request->session()->get('result', null);

        return view('bmi.index')->with([
                    'gender' => null,
                    'heightFeet' => null,
                    'heightInches' => null,
                    'weight' => null,
                    'result' => $result,
        ]);
    }

    public function calc(Request $request) {
       
        $result = $request->session()->get('result', null);
        $gender = $request->session()->get('gender', null);
        $heightFeet = $request->session()->get('heightFeet', null);
        $heightInches = $request->session()->get('heightInches', null);
        $weight = $request->session()->get('weight', null);

        return view('bmi.show')->with([
                    'gender' => $gender,
                    'heightFeet' => $heightFeet,
                    'heightInches' => $heightInches,
                    'weight' => $weight,
                    'result' => $result,
        ])->withInput();
    }

    public function bmi(Request $request) {
        
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

        $totHeightInches = 0;
        $BodyMassIndex = 0.00;

        $totHeightInches = ($heightFeet * 12) + $heightInches;
        $BodyMassIndex = number_format(($weight * 703) / (pow($totHeightInches, 2)), 2);

        $range = 'Morbidly Obese';
        if ($BodyMassIndex < 40) {
        $range = 'Obese';    
        }   if ($BodyMassIndex < 30) {
        $range = 'Overweight'; 
        }   if ($BodyMassIndex < 25) {
        $range = 'Normal'; 
        }   if ($BodyMassIndex < 18.5) {
        $range = 'underweight';            
        }   if ($BodyMassIndex > 18.5) {
        $range = 'underweight';
        }
              
        $result .= " and have a body mass index (BMI) of : " . $BodyMassIndex . "%";
        $result .= " which classifies you as " . $range . "";

    dump( 'in BMIFormController::bmi() and result = ' . $result );

        return redirect('/bmi')->with([
            'result' => $result,
        ])->withInput();
    }
}