@extends('layouts.master')

@section('head')
     <link href='/css/restaurant.css' rel='stylesheet'>
@endsection

@section('content')


@if(!Auth::user())
    <p>
    Welcome to JandoEats&mdash; an online public forum where users can input personal reviews and assign ratings of local restaurants.
    </p>
    
    <p>
    <a href='/register' dusk='register-link'>Register now to get started...</a>
    </p>

@else
    <p>
    Welcome back, {{ $userName ?? '' }}
    </p>

    <form method='GET' action='/search'>

        <strong>Search for a restaurant to add to your list:</strong>

 <fieldset>
            <label for='searchTerms'>
                Search terms:
                <input type='text' name='searchTerms' value='{{ old('searchTerms', $searchTerms ?? '') }}'>
            </label>
        </fieldset>

        <fieldset>
            <label>
                Search type:
            </label>

            <input 
                type='radio' 
                name='searchType' 
                id='name' 
                value='name'
                {{ (old('searchType') == 'name' or $searchType == 'name') ? 'checked' : '' }}
            >
            <label for='name'> Name of Restaurant</label>
            
            <input 
                type='radio' 
                name='searchType' 
                id='cuisine' 
                value='cuisine'
                {{ (old('searchType') == 'cuisine' or $searchType == 'cuisine') ? 'checked' : '' }}
            >
            <label for='cuisine'> Cuisine</label>
            
        </fieldset>

        <input type='submit' class='btn btn-primary' value='Search'>

        @if(count($errors) > 0)
        <ul class='alert alert-danger error'>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

    </form>

    @if(!is_null($searchResults))
        @if(count($searchResults) == 0)
            <div class='results alert alert-warning'>
                No results found.
                <a href='/restaurants/create'>Want to add this restaurant to our distribution list?</a>
            </div>
        @else
            <div class='results alert alert-primary'>

            {{ count($searchResults) }} 
            {{ Str::plural('Result', count($searchResults)) }}:

                <ul>
                    @foreach($searchResults as $slug => $restaurant)
                    <li><a href='/restaurants/{{ $slug }}'> {{ $restaurant['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endif
@endif

@endsection
