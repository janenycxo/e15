{{-- /resources/views/books/create.blade.php --}}
@extends('layouts.master')

@section('title')
    Add a Restaurant
@endsection

@section('content')
    
    @if(session('flash-alert'))
    <div class='flash-alert'> 
        {{session('flash-alert')}}
    </div>
    @endif

    <h1>Add a Restaurant</h1>

    <p>Found a new pop-up, or simply just want to add a new restaurant you don't see on our list? You can add it here!</p>

    <form method='POST' action='/restaurants'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}

        <label for='name'>* Name of Restaurant</label>
        <input type='text' name='name' id='name' value='{{ old('name') }}'>
        @include('includes.error-field', ['fieldName' => 'name'])

        <label for='year_open'>* Year Open (YYYY)</label>
        <input type='text' name='year_open' id='year_open' value='{{ old('year_open') }}'>
        @include('includes.error-field', ['fieldName' => 'year_open'])
        
        <label for='location'>* Location </label>
        <input type='text' name='location' id='location' value='{{ old('location') }}'>
        @include('includes.error-field', ['fieldName' => 'location'])
        
        <label for='county'>* County </label>
        <input type='text' name='county' id='county' value='{{ old('county') }}'>
        @include('includes.error-field', ['fieldName' => 'county'])
        
        <label for='cuisine'>* Cuisine</label>
        <input type='text' name='cuisine' id='cuisine' value='{{ old('cuisine') }}'>
        @include('includes.error-field', ['fieldName' => 'cuisine'])

        <label for='meal'>* Meal</label>
        <input type='text' name='meal' id='meal' value='{{ old('meal') }}'>
        @include('includes.error-field', ['fieldName' => 'meal'])
  
        <label for='restaurant_url'>* Restaurant URL</label>
        <input type='text' name='restaurant_url' id='restaurant_url' value='{{ old('restaurant_url') }}'>
        @include('includes.error-field', ['fieldName' => 'restaurant_url'])

        <label for='description'>Description</label>
        <textarea name='description'>{{ old('description') }}</textarea>
        @include('includes.error-field', ['fieldName' => 'description'])

        <label for='review'>Review</label>
        <textarea name='review'>{{ old('review') }}</textarea>
        @include('includes.error-field', ['fieldName' => 'review'])        

        <label for='rating'>Rating</label>
        <textarea name='rating'>{{ old('rating') }}</textarea>
        @include('includes.error-field', ['fieldName' => 'rating'])



        <input type='submit' value='Add a Restaurant'>

    </form>

    @if(count($errors) > 0)
    <ul class='alert alert-danger error'>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif

@endsection