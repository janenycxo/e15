@extends('layouts.master')

@section('content')
<h1>Customer Service</h1>

<p>Email: {{ config('mail.supportEmail') }}</p>
<p>Phone: 1-800-Jando-Eats</p>
@endsection