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

    <h1>Add a NEW Restaurant</h1>

    <p><h2>Did you discover a new pop-up, or a new restaurant? You can add it here!</p></h2>

    <form method='POST' action='/restaurants'>
        <div class='details'>* All fields are required. </div>
        {{ csrf_field() }}
       
        <label for='title'>* Restaurant Slug </label>
        <div class='details'> This restaurant slug field may only contain letters, numbers, dashes and underscores (i.e. the-alcove). </div>
        <input type='text' name='slug' id='slug' value='{{ old('slug') }}'>
        @include('includes.error-field', ['fieldName' => 'slug'])

        <label for='name'>* Name of Restaurant</label>
        <input type='text' name='name' id='name' value='{{ old('name') }}'>
        @include('includes.error-field', ['fieldName' => 'name'])

        <label for='year_open'>* Year Open (YYYY)</label>
        <input type='text' name='year_open' id='year_open' value='{{ old('year_open') }}'>
        @include('includes.error-field', ['fieldName' => 'year_open'])
        
        <label for='location'>* Location </label>
        <div class='details'> Please include the address of the restaurant you wish to add here. (123 Main St Elmhurst NY 11375). </div>
        <input type='text' name='location' id='location' value='{{ old('location') }}'>
        @include('includes.error-field', ['fieldName' => 'location'])
        
        <label for='county'>* County </label>
        <div class='details'> Input one of the Five Counties (also known as the boroughs) of NYC (Manhattan, Queens, Brooklyn, Bronx, or Staten Island). </div>
        <input type='text' name='county' id='county' value='{{ old('county') }}'>
        @include('includes.error-field', ['fieldName' => 'county'])
        
        <label for='cuisine'>* Cuisine</label>
        <div class='details'> Please indicate the type of cuisine this location serves (i.e. Japanese, Italian, Irish, Mexican, Carribean...). </div>
        <input type='text' name='cuisine' id='cuisine' value='{{ old('cuisine') }}'>
        @include('includes.error-field', ['fieldName' => 'cuisine'])

        <label for='meal'>* Meal</label>
        <div class='details'> Please indicate the type of meal this location is best suited (i.e. Breakfast, Lunch, Dinner, Tapas, Bakery...) for this restaurant addition. </div>
        <input type='text' name='meal' id='meal' value='{{ old('meal') }}'>
        @include('includes.error-field', ['fieldName' => 'meal'])
  
        <label for='restaurant_url'>* Restaurant URL</label>
        <div class='details'> Please insert the restaurant URL. Do not leave blank. (http:/www.thealcove.xyz). </div>
        <input type='text' name='restaurant_url' id='restaurant_url' value='{{ old('restaurant_url') }}'>
        @include('includes.error-field', ['fieldName' => 'restaurant_url'])

        <label for='description'>* Description</label>
        <div class='details'> This is a brief description of the restaurant, the location, the parking situation. Anything you feel helps describe the restaurant. Minimum 255 words. </div>
        <textarea name='description'>{{ old('description') }}</textarea>
        @include('includes.error-field', ['fieldName' => 'description'])

        <label for='review'>* Review</label>
        <div class='details'> This is where you input your experience during your visit. What stood out, what you liked or disliked about the restaurant. Share your experience. Minimum 255 words. </div>
        <textarea name='review'>{{ old('review') }}</textarea>
        @include('includes.error-field', ['fieldName' => 'review'])        

        <label for='rating'>* Rating</label>
        <div class='details'> Enter a star rating (1- Poor, 2- Below Average, 3- Average, 4- Good, 5-Excellent).</div>
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