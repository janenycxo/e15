@extends('layouts.master')

@section('title')
{{ $restaurant ? $restaurant->name : 'Restaurant Listing Not Found' }}
@section('head')
<link href='/css/restaurants/show.css' rel='stylesheet'>
@endsection

@section('content')

    @if(!$restaurant)
    Restaurant Listing Not Found. <a href='/restaurants'>Please visit one of the restaurant on our lists.</a>
@else    
<h1 dusk='restaurant-title-heading'>{{ $restaurant->name }}</h1>
@if($restaurant->name)
    <p dusk='restaurant-info'>Is located: {{ $restaurant->location }}</p>
@endif

<p>Established: {{ $restaurant->year_open }}

<p class='description'>
    {{ $restaurant->description }}
    <br>
   <a href='{{ $restaurant->restaurant_url }}'> Visit the restaurant page.</a>

</p>
    <a href='/list/{{ $restaurant->slug }}/add' dusk='add-to-list-button'><i class="fa fa-plus"></i> Add this Restaurant to your list</a> 
 <a href='/books/{{ $restaurant->slug }}/edit'><i class="fa fa-edit"></i> Edit this Restaurant Listing</a>
   <a href='/books/{{ $restaurant->slug }}/delete'><i class="fa fa-trash"></i> Delete this Restaurant Listing</a>

@endif

@endsection