@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Editar un curso</h1>
    
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('put')
        <label for="">
            Nombre:
            <br>
            <input name="name" type="text" value="{{$curso->name}}">
        </label>

        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="description" >{{$curso->description}}</textarea>
        </label>

        <br>

        <label for="">
            Categoria:
            <br>
            <input name="category" type="text" value="{{$curso->category}}">
        </label>
        <br>
        <button>Actualizar formulario</button>
    </form>
@endsection