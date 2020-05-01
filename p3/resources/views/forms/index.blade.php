@extends('layouts.master')

@section('title')
    All Restaurants
@endsection

@section('head')
    <link href='/css/restaurants/index.css' rel='stylesheet'>
@endsection

@section('content')
  
      <div id='newRestaurants'>
        <h2>Recently Added Restaurants</h2>
            <ul>
            @foreach($newRestaurants as $restaurant)
            <li>{{ $restaurant->name }}</li>
            @endforeach
            </ul>
    </div>

    <h1>All Restaurants</h1>
    @if(count($restaurants) == 0) 
        No restaurants have been added yet...
    @else
    <div id='restaurants'>
        @foreach($restaurants as $restaurant)
        <a class='restaurant' href='/restaurants/{{ $restaurant->slug }}'>
            <h3>{{ $restaurant->name }}</h3>
        </a>
        @endforeach
    </div>
    @endif

@endsection