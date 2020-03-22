@extends('layouts.master')

@section('head')

@section('content')
<p>
<h2>Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women.</h2>
</p>
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

    <h1>Please follow these guidelines as indicated below to determine what range you fall under: </h1>
    <br>1. Select your gender.
    <br>2. Enter your height in inches.   
    <br>3. Enter your weight in pounds.
    <br>***All Fields are Required.***
    <br>
    <br>
    <br>
    <form method='GET' action='/forms'>
    <br>      
    <br>

        @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
          <li class='error'>{{ $error }}</li>
        @endforeach
    </ul>
        @endif
      
    <legend><h1>BMI Calculator</h1></legend>
    <br>

<fieldset> 
     <h4>Step 1.</h4>
     <h3>Please select your Gender:</h3>
   
    <div>
    
    <input type='checkbox' id='gender' name='gender' value='Male'>
    <label for='Male'>Male</label><br>
        
    <input type='checkbox' id='gender' name='gender' value='Female'>
    <label for='Female'>Female</label><br>
    
         
    </div>

</fieldset>
 
    <div>
    <br>
    <br>    

<fieldset>
<p><h4>Step 2.</h4> 
<h3>Please enter your height in Inches:</h3>  </p>      
     <div id='height-block'>
            <label>Height in feet</label>
     
                <select name="heightFeet" >                  
                    <option value='1' {{ (old('heightFeet') == '1') ? 'selected' : '' }}>1</option>
                    <option value="2" {{ (old('heightFeet')=='2') ? 'selected' : '' }}>2</option>
                    <option value="3" {{ (old('heightFeet')=='3') ? 'selected' : '' }}>3</option>
                    <option value="4" {{ (old('heightFeet')=='4') ? 'selected' : '' }}>4</option>
                    <option value="5" {{ (old('heightFeet')=='5') ? 'selected' : '' }}>5</option>
                    <option value="6" {{ (old('heightFeet')=='6') ? 'selected' : '' }}>6</option>
                    <option value="7" {{ (old('heightFeet')=='7') ? 'selected' : '' }}>7</option>
                    <option value="8" {{ (old('heightFeet')=='8') ? 'selected' : '' }}>8</option>
                </select>
            </label>
            <label>Height in inches
           
                <select name="heightInches" >
                    <option value="0" {{ (old('heightInches')=='0') ? 'selected' : '' }}>0</option>
                    <option value="1" {{ (old('heightInches')=='1') ? 'selected' : '' }}>1</option>
                    <option value="2" {{ (old('heightInches')=='2') ? 'selected' : '' }}>2</option>
                    <option value="3" {{ (old('heightInches')=='3') ? 'selected' : '' }}>3</option>
                    <option value="4" {{ (old('heightInches')=='4') ? 'selected' : '' }}>4</option>
                    <option value="5" {{ (old('heightInches')=='5') ? 'selected' : '' }}>5</option>
                    <option value="6" {{ (old('heightInches')=='6') ? 'selected' : '' }}>6</option>
                    <option value="7" {{ (old('heightInches')=='7') ? 'selected' : '' }}>7</option>
                    <option value="8" {{ (old('heightInches')=='8') ? 'selected' : '' }}>8</option>
                    <option value="9" {{ (old('heightInches')=='9') ? 'selected' : '' }}>9</option>
                    <option value="10" {{ (old('heightInches')=='10') ? 'selected' : '' }}>10</option>
                    <option value="11" {{ (old('heightInches')=='11') ? 'selected' : '' }}>11</option>
                </select>
            </label>
        </div> 
</fieldset>  
    <br>
    <br>  
<fieldset>                                
    <p><h4>Step 3.</h4><h3> Please enter your weight in pounds:</h3> <p>  
    <div id='weight-block'>
            <label>Weight in lbs.<br><br>
                <input type="number" name='weight' step='1.0' value='{{ old("weight") }}'>
            </label>
        </div>
    <div>
    <br>
    <button type='submit' title='Calculate BMI Now'>Find your BMI</button>
    </div> 
</fieldset>
	</form>

    <br>
    <br>
      
@endsection

