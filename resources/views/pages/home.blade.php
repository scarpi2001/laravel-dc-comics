@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)
            <a href="{{ route('person.show', $person) }}">
                <li>{{ $person -> first_name }} {{ $person -> last_name }}</li>
            </a>
        @endforeach
    </ul>

@endsection