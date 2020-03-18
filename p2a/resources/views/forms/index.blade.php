@extends('layouts.welcome')

@section('title')
    BMI Calculator
@endsection

@section('content')

@if($BMI)
<h2>{{ "RESULTS:" }}</h2>
@endif

@if ($gender == 'Female' && $BMI <= 18.5) 
<ul>
<li>{{ "You are Underweight"}}</li>;

@elseif($gender == 'Female' && $BMI == 18.5 = 24.9)
<li>{{ "You are in the Normal Range" }}</li>

@elseif ($gender == 'Female' && $BMI == 25-29.9);
<li>{{ "You are in the Overweight Range. Healthy diet and excercise can help you achieve the desired BMI range." }}</li>

@elseif ($gender == 'Female' && $BMI == 30-39.9);
<li>{{ "You are in the Obese Range. Please remember to stay active and maintain a healthy lifestyle for overall wellness." }}</li>

@elseif ($gender == 'Female' && $BMI == > 40);
<li>{{ "You are in the Morbidly Obese Range. Please consult a physician for help in achieving the ideal BMI." }}</li>

</ul>
@endif 

@if ($gender == 'Male' && $BMI <= 18.5) 
<ul>
<li>{{ "You are Underweight"}}</li>;

@elseif($gender == 'Male' && $BMI == 18.5 = 24.9)
<li>{{ "You are in the Normal Range" }}</li>

@elseif ($gender == 'Male' && $BMI == 25-29.9);
<li>{{ "You are in the Overweight Range. Healthy diet and excercise can help you achieve the desired BMI range." }}</li>

@elseif ($gender == 'Male' && $BMI == 30-39.9);
<li>{{ "You are in the Obese Range. Please remember to stay active and maintain a healthy lifestyle for overall wellness." }}</li>

@elseif ($gender == 'Male' && $BMI == > 40);
<li>{{ "You are in the Morbidly Obese Range. Please consult a physician for help in achieving the ideal BMI." }}</li>

</ul>
@endif


<h3>Refresh The P2 App - Beyond BMI Page by Clicking the Button Below.</h3>

<div>
      <button class='refresh'><a class='refresh' title="Re-calclate BMI" href="http://e15p2.janenycxo.me">Click here to Retry BMI Calculator</a></button>
    </div>
@endsection