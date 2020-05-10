@extends('layouts.master')

@section('title')

@section('head')
<link href='/css/restaurants/show.css' rel='stylesheet'>
@endsection

@section('content')


@if(!$restaurant)
    Restaurant Listing Not Found. <a href='/restaurants'>Please visit one of the restaurant on our lists.</a>
@else    

<h1>{{ $restaurant->name }}</h1>

<p>Is located: {{ $restaurant->location }} Established:({{$restaurant->year_open}})</p>

<p class='description'>
    {{ $restaurant->description }}
   <a href='{{ $restaurant->restaurant_url }}'>Visit the restaurant page.</a>

</p>

@endif

@endsection

