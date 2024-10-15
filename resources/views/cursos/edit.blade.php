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
            <input name="name" type="text" value="{{old('name', $curso->name)}}" >
        </label>

        @error("name")
            <br>
                <span>*{{$message}}</span>
            <br>
            
        @enderror

        <br>

        <label for="">
            Slug:
            <br>
            <input name="slug" type="text" value="{{old('slug', $curso->slug)}}">
        </label>

        @error("slug")
            <br>
                <span>*{{$message}}</span>
            <br>
        @enderror

        <br>

        <label for="">
            Descripcion:
            <br>
            <textarea name="description" >{{old('description', $curso->description)}}</textarea>
        </label>

        @error("description")
        <br>
            <span>*{{$message}}</span>
        @enderror

        <br>

        <label for="">
            Categoria:
            <br>
            <input name="category" type="text" value="{{old('category', $curso->category)}}">
        </label>
        @error("category")
            <br>
                <span>*{{$message}}</span>
            <br>
            
        @enderror
        <br>
        <button>Actualizar formulario</button>
    </form>
@endsection