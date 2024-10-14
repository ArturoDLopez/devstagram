@extends('layouts.plantilla')

@section('title', 'Cursos'. $curso)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route("cursos.index")}}">Volver</a>
    <p><strong>Categoria: </strong>{{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection