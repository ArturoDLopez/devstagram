@extends('layouts.plantilla')

@section('title', 'Cursos'. $curso)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route("cursos.index")}}">Volver</a>
    <br>
    <a href="{{route("cursos.edit", $curso)}}">Editar curso</a>
    <p><strong>Categoria: </strong>{{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection