@extends('layouts.main-layout')

@section('content')
    
    <h1>New Person</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="name">First Name</label>
        <input type="text" name="first_name">
        <br>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name">
        <br>
        <label for="date_of_birth">Date of Birth</label>
        <input type="date" name="date_of_birth">
        <br>
        <label for="height">Height</label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>

@endsection