@extends('layouts.main-layout')

@section('content')
    
    <h1>Name: {{ $person -> first_name }} {{ $person -> last_name }}</h1>
    <h2>Date of birth: {{ $person -> date_of_birth }}</h2>
    <h2>Height: {{ $person -> height }} cm</h2>
    
@endsection