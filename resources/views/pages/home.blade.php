@extends('layouts.main-layout')

@section('content')
    
    <a href="{{ route('saint.create') }}">CREATE NEW SAINT</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Luogo di Nascita</th>
                <th>Data di Benedizione</th>
                <th>Numero di miracoli</th>
                <th>X</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santi as $santo)
                <tr>
                    <td>{{$santo -> name}}</td>
                    <td>{{$santo -> birth_place}}</td> 
                    <td>{{$santo -> blessing_date}}</td> 
                    <td>{{$santo -> number_of_miracles }}</td> 
                    <td><a href="{{ route('saint.destroy', ['id'=> $santo -> id]) }}">X</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
    
@endsection