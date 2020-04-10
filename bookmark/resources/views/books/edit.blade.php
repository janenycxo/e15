{{-- /resources/views/books/edit.blade.php --}}
@extends('layouts.master')

@section('title')
    Edit book {{ $book->title }}
@endsection

@section('content')

    <h1>Edit a book {{ $book->title }}</h1>

    <form method='POST' action='/books/{{ $book->slug }}'>
        <div class='details'>* Required fields</div>

        {{ csrf_field() }}

        {{  method_field('put') }}

        <label for='title'>* Slug URL</label>
        <div class='details'> This slug may only contain letters, numbers, dashes and underscores.
        <input type='text' name='slug' id='slug' value='{{ old('slug', $book->slug) }}'>

        <label for='title'>* Title</label>
        <input type='text' name='title' id='title' value='{{ old('title', $book->title) }}'>

        <label for='author'>* Author</label>
        <input type='text' name='author' id='author' value='{{ old('author', $book->author) }}'>

        <label for='published_year'>* Published Year (YYYY)</label>
        <input type='text' name='published_year' id='published_year' value='{{ old('published_year', $book->published_year) }}'>

        <label for='cover_url'>Cover URL</label>
        <input type='text' name='cover_url' id='cover_url' value='{{ old('cover_url', $book->cover_url) }}'>

        <label for='info_url'>* Wikipedia URL</label>
        <input type='text' name='info_url' id='info_url' value='{{ old('info_url', $book->info_url) }}'>

        <label for='purchase_url'>* Purchase URL </label>
        <input type='text' name='purchase_url' id='purchase_url' value='{{ old('purchase_url', $book->purchase_url) }}'>

        <label for='description'>Description</label>
        <textarea name='description'>{{ old('description', $book->description) }}</textarea>

        <input type='submit' class='btn btn-primary' value='Update'>

    </form>

    @if(count($errors) > 0)
    <ul class='alert alert-danger error'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
@endsection