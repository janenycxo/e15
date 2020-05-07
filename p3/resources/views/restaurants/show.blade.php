@extends('layouts.master')

@section('title')
{{ $rstaurant ? $restaurant->name : 'Restaurant not found' }}
@endsection

@section('head')
<link href='/css/restaurants/show.css' rel='stylesheet'>
@endsection

@section('content')

@if(!$restaurant)
    Restaurant not found. <a href='/restaurants'>Check out the other restaurants in our archived collection. </a>
@else    
<h1>{{ $restaurant->name }}</h1>

<p>By {{ $restaurant->cuisine }} ({{$restaurant->location}})</p>
<a href='{{ $restaurant->description }}'>Description</a>

<p class='description'>
    {{ $restaurant->description }}
    <a href='{{ $restaurant->year_opened }}'>Year Opened.</a>
</p>
<a href='/restaurant/{{ $restaurant->slug }}/edit'>Edit this Restaurant</a>
@endif

@endsection