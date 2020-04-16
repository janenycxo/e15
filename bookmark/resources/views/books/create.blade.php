{{-- /resources/views/books/create.blade.php --}}
@extends('layouts.master')

@section('title')
    Add a book
@endsection

@section('content')
    
    @if(session('flash-alert'))
    <div class='flash-alert'> 
        {{session('flash-alert')}}
    </div>
    @endif

    <h1>Add a book</h1>

    <p>Want to add a book to your list that isn’t in our library? Not a problem- you can add it here!</p>

    <form method='POST' action='/books'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}

        <label for='title'>* Slug URL</label>
        <div class='details'>* This slug may only contain letters, numbers, dashes and underscores.</div>
        <input type='text' name='slug' id='slug' value='{{ old('slug') }}'>
        @include('includes.error-field', ['fieldName' => 'slug'])

        <label for='title'>* Title</label>
        <input type='text' name='title' id='title' value='{{ old('title') }}'>
        @include('includes.error-field', ['fieldName' => 'title'])

        <label for='author'>* Author</label>
        <input type='text' name='author' id='author' value='{{ old('author') }}'>
        @include('includes.error-field', ['fieldName' => 'author'])

        <label for='published_year'>* Published Year (YYYY)</label>
        <input type='text' name='published_year' id='published_year' value='{{ old('published_year') }}'>
        @include('includes.error-field', ['fieldName' => 'published_year'])

        <label for='cover_url'>Cover URL</label>
        <input type='text' name='cover_url' id='cover_url' value='{{ old('cover_url', 'http://') }}'>
        @include('includes.error-field', ['fieldName' => 'cover_url'])

        <label for='info_url'>* Wikipedia URL</label>
        <input type='text' name='info_url' id='info_url' value='{{ old('info_url', 'http://') }}'>
        @include('includes.error-field', ['fieldName' => 'wikipedia_url'])

        <label for='purchase_url'>* Purchase URL </label>
        <input type='text' name='purchase_url' id='purchase_url' value='{{ old('purchase_url', 'http://') }}'>
        @include('includes.error-field', ['fieldName' => 'purchase_url'])

        <label for='description'>Description</label>
        <textarea name='description'>{{ old('description') }}</textarea>
        @include('includes.error-field', ['fieldName' => 'description'])

        <input type='submit' value='Add a book'>

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