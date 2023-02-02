@extends('layouts.main-layout')

@section('content')
    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Luogo di Nascita</th>
                <th>Data di Benedizione</th>
                <th>Numero di miracoli</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santi as $santo)
                <tr>
                    <td>{{$santo -> name}}</td>
                    <td>{{$santo -> birth_place}}</td> 
                    <td>{{$santo -> blessing_date}}</td> 
                    <td>{{$santo -> number_of_miracles }}</td> 
                </tr>
            @endforeach
        </tbody>
    </table>
        
    
@endsection