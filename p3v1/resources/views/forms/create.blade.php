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

    <form method='POST' action='/rstaurants'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}

        <label for='title'>* Slug URL</label>
        <div class='details'>* This slug may only contain letters, numbers, dashes and underscores.</div>
        <input type='text' name='slug' id='slug' value='{{ old('slug') }}'>
        @include('includes.error-field', ['fieldName' => 'slug'])

        <label for='name'>* Name of Restaurant</label>
        <input type='text' name='name' id='name' value='{{ old('name') }}'>
        @include('includes.error-field', ['fieldName' => 'name'])

        <label for='cuisine'>* Cuisine</label>
        <input type='text' name='cuisine' id='cuisine' value='{{ old('cuisine') }}'>
        @include('includes.error-field', ['fieldName' => 'cuisine'])

        <label for='year_opened'>* Year Opened (YYYY)</label>
        <input type='text' name='year_opened' id='year_opened' value='{{ old('year_opened') }}'>
        @include('includes.error-field', ['fieldName' => 'year_opened'])

        <label for='location'>* Location </label>
        <input type='text' name='location' id='location' value='{{ old('location') }}'>
        @include('includes.error-field', ['fieldName' => 'location'])

        <label for='description'>Description</label>
        <textarea name='description'>{{ old('description') }}</textarea>
        @include('includes.error-field', ['fieldName' => 'description'])

        <input type='submit' value='Add a Restaurant'>

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