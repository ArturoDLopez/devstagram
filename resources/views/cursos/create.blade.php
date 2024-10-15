@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>En esta pagina se pueden crear cursos</h1>
    
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf
        <label for="">
            Nombre:
            <br>
            <input name="name" type="text">
        </label>

        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="description"></textarea>
        </label>

        <br>

        <label for="">
            Categoria:
            <br>
            <input name="category" type="text">
        </label>
        <br>
        <button>Enviar formulario</button>
    </form>
@endsection