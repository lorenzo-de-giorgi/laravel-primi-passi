@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Home page</h1>
    <h2>Hello {{$user['name']}} {{$user['surname']}}</h2>
</main>

@endsection
