@extends('layouts.master')

@section('title')
{{ $restaurant ? $restaurant->name : 'Restaurant not found' }}
@endsection

@section('head')
<link href='/css/restaurants/show.css' rel='stylesheet'>
@endsection

@section('content')

@if(!$restaurant)
    Restaurant not found. <a href='/restaurants'>Check out the other restaurants in our archived collection. </a>
@else    
<h1 dusk='restaurant-sign'>{{ $restaurant->name }}</h1>

@if($restaurant->cuisine)
<p dusk='restaurant-details'>By {{ $restaurant->cuisine->name. ' '. $restaurant->cuisine->location }}</p>
@endif

<p>({{ $restaurant->year_open }})</p>

<p class='description'>
    {{ $restaurant->description }}
    <a href='{{ $restaurant->restaurant_url }}'>Learn more...</a>
</p>

<ul class='restaurantActions'>
    <li><a href='/list/{{ $restaurant->name }}/add' dusk='add-to-list-button'><i class="fa fa-plus"></i> Add to your list</a>
    <li><a href='/restaurants/{{ $restaurant->name }}/edit'><i class="fa fa-edit"></i> Edit</a>
    <li><a href='/restaurants/{{ $restaurant->name }}/delete'><i class="fa fa-trash"></i> Delete</a>
</ul>
@endif

@endsection
