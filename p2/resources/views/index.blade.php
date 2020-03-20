@extends('format.master')

@section('content')
<h2>Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women.</h2>

    <br>
    <br>
    <h3>BMI Categories:</h3>
    <br>Underweight = < 18.5
    <br>Normal  = 18.5–24.9
    <br>Overweight = 25–29.9
    <br>Obesity = 30-39.9
    <br>Morbidly Obese = >40
           
    <br>
    <br>
    <h3>Please follow these guidelines as indicated below to begin: </h3>
    <br>1. Select your gender.
    <br>2. Enter your height in inches.   
    <br>3. Enter your weight in pounds.
    <br>
    <br>
    <br>
    <form method='GET' action='/bmi'>
    <br>      
    <br>
        
    <fieldset> 

    <legend><h2>BMI Calculator</h2></legend>
    <br>
    <h3>Please select your Gender:</h3>
        
    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
          <li class='error'>{{ $error }}</li>
        @endforeach
    </ul>
        @endif

    <div>
    <label for='Male'> Male</label>
    <input type='radio' value='Gender' id='Male' name='Male'>
    <br>
    <label for='Female'> Female</label>
    <input type='radio' value='Gender' id='Female' name='Female'>
    <br>      
    </div>
      
    <div>
    <br>
    <br>    
    <h3> Please enter your height in Inches:</h3>         
    <div>
    <input type='text' id='height' placeholder= 'Enter your Height'>
    </div>  
    <br>
    <br>                               
    <h3>Please enter your weight in pounds:</h3>   
    <input type='text' id='weight' placeholder= 'Enter your Weight'>       
    <br><br>
    <div>
    <br>
    <button type='submit' title='What is your BMI?'>Calculate BMI</button>
    </div> 
    </fieldset>
    </form> 
    <br>
    <br>
    <br>
    <br>
    @endsection