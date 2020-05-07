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

        <label for='title'>* Slug URL</label>
        <div class='details'>* May only contain letters, numbers, dashes and underscores.
        <input type='text' name='slug' id='slug' value='{{ old('slug', $restaurant->slug) }}'>
       
        <label for='name'>* Name of Restaurant</label>
        <input type='text' name='name' id='name' value='{{ old('name',$restaurant->name) }}'>
        
        <label for='cuisine'>* Cuisine</label>
        <input type='text' name='cuisine' id='cuisine' value='{{ old('cuisine', $restaurant->cuisine) }}'>

        <label for='year_opened'>* Year Opened (YYYY)</label>
        <input type='text' name='year_opened' id='year_opened' value='{{ old('year_opened', $restaurant->year_opened) }}'>

        <label for='location'>* Location </label>
        <input type='text' name='location' id='location' value='{{ old('location', $restaurant->location) }}'>

        <label for='description'>Description</label>
        <textarea name='description'>{{ old('description', $restaurant->description) }}</textarea>
        
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