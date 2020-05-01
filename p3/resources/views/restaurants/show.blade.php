@extends('layouts.master')

@section('name')
    {{ $name }}
@endsection

@section('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/books/show.css' rel='stylesheet'>
@endsection

@section('content')
    <h1>{{ $name }}</h1>
    
    <p>
        Details about this restaurant will go here...
    </p>
@endsection
