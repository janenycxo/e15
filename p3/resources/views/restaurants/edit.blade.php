{{-- /resources/views/books/edit.blade.php --}}
@extends('layouts.master')

@section('title')
    Edit Restaurant {{ $restaurant->name }}
@endsection

@section('content')

    <h1>Edit a Restaurant {{ $restaurant->name }}</h1>

    <form method='POST' action='/restaurants/{{ $restaurant->slug }}'>
        <div class='details'>* Required fields</div>

        {{ csrf_field() }}

        {{  method_field('put') }}

        
        <label for='name'>* Name of Restaurant</label>
        <input type='text' name='name' id='name' value='{{ old('name',$restaurant->name) }}'>
        
        <label for='year_open'>* Year Open (YYYY)</label>
        <input type='text' name='year_open' id='year_open' value='{{ old('year_open', $restaurant->year_open) }}'>

        <label for='location'>* Location </label>
        <input type='text' name='location' id='location' value='{{ old('location', $restaurant->location) }}'>

        <label for='county'>* County</label>
        <input type='text' name='county' id='county' value='{{ old('county', $restaurant->county) }}'>

        <label for='cuisine'>* Cuisine</label>
        <input type='text' name='cuisine' id='cuisine' value='{{ old('cuisine', $restaurant->cuisine) }}'>

        <label for='meal'>* Meal</label>
        <input type='text' name='meal' id='meal' value='{{ old('meal', $restaurant->meal) }}'>

        <label for='restaurant_url'>* Restaurant URL</label>
        <input type='text' name='restaurant_url' id='restaurant_url' value='{{ old('restaurant_url', $restaurant->restaurant_url) }}'>
       
        <label for='description'>Description</label>
        <textarea name='description'>{{ old('description', $restaurant->description) }}</textarea>
        
        <label for='review'>* Review</label>
        <input type='text' name='review' id='review' value='{{ old('review', $restaurant->review) }}'>

        <label for='rating'>* Rating</label>
        <input type='text' name='rating' id='rating' value='{{ old('rating', $restaurant->rating) }}'>

        <input type='submit' class='btn btn-primary' value='Update'>

    </form>

    {{--
    @if(count($errors) > 0)
    <ul class='alert alert-danger error'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    --}}
@endsection