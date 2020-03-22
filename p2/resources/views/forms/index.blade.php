@extends('layouts.master')

@section('head')
<link href='/css/styling.css' type='text/css' rel='stylesheet'>
@endsection

@section('title')
  BMI Calculator
  Your Bmi is: {{$BodyMassIndex}}  
@endsection 

@section('content')

    
@if($BodyMassIndex)
<h2>{{ "Here are the results of your BMI Calculations:" }}</h2>
@endif

@if($gender == 'Female' && $BodyMassIndex <= 18.5) 
<ul>
    <li><h3>{{ "You are Underweight" }}</h3></li>;

@elseif($gender == 'Female' && $BodyMassIndex >= 24.9)
    <li><h3>{{ "You are in the Normal Range" }}</h3></li>

@elseif($gender == 'Female' && $BodyMassIndex >= 29.9);
    <li><h3>{{ "You are in the Overweight Range. Healthy diet and excercise can help you achieve the desired BMI range." }}</h3></li>

@elseif($gender == 'Female' && $BodyMassIndex >= 39.9);
    <li><h3>{{ "You are in the Obese Range. Please remember to stay active and maintain a healthy lifestyle for overall wellness." }}</h3></li>

@elseif($gender == 'Female' && $BodyMassIndex >= 40);
    <li><h3>{{ "You are in the Morbidly Obese Range. Please consult a physician for help in achieving the ideal BMI." }}</h3></li>
</ul>
@endif

@if($gender == 'Male' && $BodyMassIndex <= 18.5) 
<ul>
    <li><h3>{{ "You are Underweight" }}</li>;

@elseif($gender == 'Male' && $BodyMassIndex >= 24.9)
    <li><h3>{{ "You are in the Normal Range" }}</li>

@elseif($gender == 'Male' && $BodyMassIndex >= 29.9);
    <li><h3>{{ "You are in the Overweight Range. Healthy diet and excercise can help you achieve the desired BMI range." }}</h3></li>

@elseif($gender == 'Male' && $BodyMassIndex >= 39.9);
    <li><h3>{{ "You are in the Obese Range. Please remember to stay active and maintain a healthy lifestyle for overall wellness." }}</h3></li>

@elseif($gender == 'Male' && $BodyMassIndex >= 40);
    <li><h3>{{ "You are in the Morbidly Obese Range. Please consult a physician for help in achieving the ideal BMI." }}</h3></li>
</ul>
@endif

<br>
<br>
Visit <a href="https://www.health.harvard.edu/">Harvard Health Publishing</a>to find tips and articles to help you achieve a healthier life. 

@if($BodyMassIndex)

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
@endif

@endsection