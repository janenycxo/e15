@extends('format.master')

@section('head')
<link href='/css/styling.css' type='text/css' rel='stylesheet'>
@endsection

@section('title')
  BMI Calculator
  Your result {{$BodyMassIndex}}  
@endsection

@section('content')

    
@if($BodyMassIndex)
<h2>{{ "RESULTS:" }}</h2>
@endif

@if($gender == 'Female' && $BodyMassIndex <= 18.5) 
<ul>
    <li>{{ "You are Underweight" }}</li>;

@elseif($gender == 'Female' && $BodyMassIndex == 18.5 = 24.9)
    <li>{{ "You are in the Normal Range" }}</li>

@elseif($gender == 'Female' && $BodyMassIndex == 25-29.9);
    <li>{{ "You are in the Overweight Range. Healthy diet and excercise can help you achieve the desired BMI range." }}</li>

@elseif($gender == 'Female' && $BodyMassIndex == 30-39.9);
    <li>{{ "You are in the Obese Range. Please remember to stay active and maintain a healthy lifestyle for overall wellness." }}</li>

@elseif($gender == 'Female' && $BodyMassIndex == > 40);
    <li>{{ "You are in the Morbidly Obese Range. Please consult a physician for help in achieving the ideal BMI." }}</li>
</ul>
@endif

@if($gender == 'Male' && $BodyMassIndex <= 18.5) 
<ul>
    <li>{{ "You are Underweight" }}</li>;

@elseif($gender == 'Male' && $BodyMassIndex == 18.5 = 24.9)
    <li>{{ "You are in the Normal Range" }}</li>

@elseif($gender == 'Male' && $BodyMassIndex == 25-29.9);
    <li>{{ "You are in the Overweight Range. Healthy diet and excercise can help you achieve the desired BMI range." }}</li>

@elseif($gender == 'Male' && $BodyMassIndex == 30-39.9);
    <li>{{ "You are in the Obese Range. Please remember to stay active and maintain a healthy lifestyle for overall wellness." }}</li>

@elseif($gender == 'Male' && $BodyMassIndex == > 40);
    <li>{{ "You are in the Morbidly Obese Range. Please consult a physician for help in achieving the ideal BMI." }}</li>
</ul>
@endif

<br>
<br>
@if(empty($BodyMassIndex)) {
  echo "Your 'BMI' is {{$BodyMassIndex}}.<br>";
}
@endif
<fieldset>
			<legend>BMI Results</legend>
				<label for="Results" id="Calculatedbmi">Your calculated BMI is:</label>
				<input type="text" name="yourbmi" id="yourbmi" readonly="readonly">
			</fieldset>
		</form>
	</div>
    <br>
    <br>

<br>
<br>
<div>
<h3>Refresh The P2 App - Beyond BMI Page by Clicking the Button Below.</h3>
<a href='/'>Click here to Retry BMI Calculator</a>
</div>
<br>
<br>

@endsection