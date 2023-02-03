@extends('layouts.main-layout')

@section('content')
    
    <h1>CREA UN NUOVO SANTO</h1>
    <form method="POST" action="{{ route('saint.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="birth_place">Birth place</label>
        <input type="text" name="birth_place">
        <br>
        <label for="blessing_date">Blessing date</label>
        <input type="date" name="blessing_date">
        <br>
        <label for="number_of_miracles">Miracle count</label>
        <input type="number" name="number_of_miracles">
        <br>
        <input type="submit" value="CREATE NEW SAINT">
        
    </form>

@endsection