@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <a href="{{ route('person.create') }}">ADD NEW PERSON</a>
    <ul>
        @foreach ($people as $person)
        <li>
            <a href="{{ route('person.show', $person) }}">
                {{ $person -> first_name }} {{ $person -> last_name }}
            </a>

            <a href="{{ route('person.delete', $person) }}">X</a>
        </li>
        @endforeach
    </ul>

@endsection