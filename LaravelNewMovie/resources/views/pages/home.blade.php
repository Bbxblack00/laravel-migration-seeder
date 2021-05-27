@extends('layouts.main-layout')

@section('principal')

    @foreach ($movies as $movie)

    <a href="{{ route ('film', $movie -> id) }}">
       n.{{ $movie -> id }} {{ $movie -> title }} <br>
    </a>
        
    @endforeach
    
@endsection