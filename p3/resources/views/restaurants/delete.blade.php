@extends('layouts.master')

@section('head')
    <link href='/css/restaurants/delete.css' rel='stylesheet'>
@endsection

@section('title')
    Confirm deletion: {{ $restaurant->name }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>

    <p>Are you sure you want to delete <strong>{{ $restaurant->name }}</strong>?</p>

    <form method='POST' action='/restaurants/{{ $restaurant->name }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type='submit' value='Yes, delete it!' class='btn btn-danger btn-small'>
    </form>

    <p class='cancel'>
        <a href='/restaurants/{{ $restaurant->name }}'>No, I changed my mind.</a>
    </p>

@endsection