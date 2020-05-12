@extends('layouts.master')

@section('head')
    <link href='/css/restaurants/delete.css' rel='stylesheet'>
@endsection

@section('title')
    Confirm deletion: {{ $restaurant->name }}
@endsection

@section('content')

    <h1>Confirm your deletion</h1>

    <p>Are you sure you want to delete <strong>{{ $restaurant->name }}</strong>?</p>
@foreach($restaurants as $restaurant)
  
    {{$restaurants->name}}
    
      
@endforeach


    <form method='POST' action='/restaurants/{{ $restaurant->slug }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type='submit' value='Yes, delete this restaurant listing.' class='btn btn-danger btn-small'>
    </form>

    <p class='cancel'>
        <a href='/restaurants/{{ $restaurant->slug }}'>No, do not delete this restaurant listing.</a>
    </p>

@endsection