@extends('layouts.master')

@section('head')
<link href='/css/pages/welcome.css' rel='stylesheet'>
@endsection

@section('content')

@if(!Auth::user())
    <p>
        Welcome to JandoEats - an online public forum where users can input personal reviews and enter information on local restaurants.
    </p>
        <a href='/register'>Register now to get started...</a>
    
@else
   <p>
   Welcome back, {{ $userName }}
   </p> 
    <form method='GET' action='/search'>

        <strong>Search for a restaurant to add to your list:</strong>

        <fieldset>
            <label for='searchTerms'>
                Search terms:
                <input type='text' name='searchTerms' value='{{ old('searchTerms', $searchTerms) }}'>
            </label>
        </fieldset>

        <fieldset>
            <label>
                Search type:
            </label>

            <input 
                type='radio' 
                name='searchType' 
                id='title' 
                value='title'
                {{ (old('searchType') == 'title' or $searchType == 'title') ? 'checked' : '' }}
            >
            <label for='title'> Restaurant Name</label>
            
            <input 
                type='radio' 
                name='searchType' 
                id='name' 
                value='name'
                {{ (old('searchType') == 'author' or $searchType == 'name') ? 'checked' : '' }}
            >
            <label for='name'> Restaurant Name</label>
            
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
                <a href='/restaurants/create'>Want to add this restaurant to our collection?</a>
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