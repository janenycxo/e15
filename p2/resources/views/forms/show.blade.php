@extends('layouts.master') 
  
@section('title')
{{ $title }}
@endsection

@section('content')
<h2>{{ $title }}</h2>

<div>
<button class='refresh'><a class='refresh' title="Recalculate" href="http://e15p2.janenycxo.me">Click here to recalculate BMI Calculator</a></button>
</div> 
   
@endsection

 