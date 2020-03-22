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

 <h1><strong>The results of your BMI Calculation</h1></strong>
  <h3>Your Bmi is: {{$BodyMassIndex}}</h3>

<br>
<h1>{{ "Here are the results of your BMI Calculations:" }}</h1>
@endif

@if($gender == 'Female' && $BodyMassIndex <=18.4)
   <h3>{{ "You are Underweight" }}</h3>

@elseif($gender == 'Female' && $BodyMassIndex >=18.5 && $BodyMassIndex <=24.9)
    <h3>{{ "You are in the Normal Range" }}</h3>

@elseif($gender == 'Female' && $BodyMassIndex >=25 && $BodyMassIndex <=29.9)
    <h3>{{ "You are in the Overweight Range. Healthy diet and excercise can help you achieve the desired BMI range." }}</h3>

@elseif($gender == 'Female' && $BodyMassIndex >=30 && $BodyMassIndex <=39.9)
    <h3>{{ "You are in the Obese Range. Please remember to stay active and maintain a healthy lifestyle for overall wellness." }}</h3>

@elseif($gender == 'Female' && $BodyMassIndex >=40)
    <h3>{{ "You are in the Morbidly Obese Range. Please consult a physician for help in achieving the ideal BMI." }}</h3>

@endif

@if($gender == 'Male' && $BodyMassIndex <=18.4)

    <h3>{{ "You are Underweight" }}

@elseif($gender == 'Male' && $BodyMassIndex >=18.5 && $BodyMassIndex <=24.9)
    <h3>{{ "You are in the Normal Range" }}

@elseif($gender == 'Male' && $BodyMassIndex >=25 && $BodyMassIndex <=29.9)
    <h3>{{ "You are in the Overweight Range. Healthy diet and excercise can help you achieve the desired BMI range." }}</h3>

@elseif($gender == 'Male' && $BodyMassIndex >=30 && $BodyMassIndex <=39.9)
    <h3>{{ "You are in the Obese Range. Please remember to stay active and maintain a healthy lifestyle for overall wellness." }}</h3>

@elseif($gender == 'Male' && $BodyMassIndex >=40)
    <h3>{{ "You are in the Morbidly Obese Range. Please consult a physician for help in achieving the ideal BMI." }}</h3>

@endif


@if($BodyMassIndex)

</form>
</div>

@endif
<br>
<br>
<br>
Visit The Nutrition Source at <a href="https://www.hsph.harvard.edu/nutritionsource/healthy-eating-plate/">Harvard T.H. Chan School of Public Health </a>for a healthy eating plate. 
<br>
<br>
Visit <a href="https://www.health.harvard.edu/">Harvard Health Publishing </a>to find tips and articles to help you achieve a healthier life. 
<br>
<br>
<br>
@endsection