@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>En esta pagina se pueden crear cursos</h1>
    
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf
        <label for="">
            Nombre:
            <br>
            <input name="name" type="text" value="{{old('name')}}">
        </label>

        @error("name")
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror

        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="description">{{old('description')}}</textarea>
        </label>
        @error("description")
        <br>
            <span>*{{$message}}</span>
        <br>
    @enderror
        <br>

        <label for="">
            Categoria:
            <br>
            <input name="category" type="text"  value="{{old('category')}}">
        </label>
        
        @error("category")
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror
        <br>
        <button>Enviar formulario</button>
    </form>
@endsection