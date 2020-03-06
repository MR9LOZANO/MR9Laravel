@extends('layout')

@section('title','Portafolio')

@section('content')
    <h1>Portafolio</h1>

    <ul>

        @forelse ($portafolio as $portafolioItem)
             <li>{{$portafolioItem['title']}} </li>
        @empty
             <li>No hay proyectos para Mostrar</li>
        @endforelse

    </ul>
@endsection


