<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//crear una ruta
Route::get('cursos', function(){
    return "Cursos";
});

//crear una ruta con parametros
Route::get("cursos/create", function(){
    return "Crear curso";
});

//crear una ruta con una variable
Route::get("cursos/{curso}", function($curso){
    return "Bienvenido al curso: $curso";
});

//crear una ruta con una variable opcional
Route::get("cursos/{curso}/{categoria?}", function($curso, $categoria = null){
    if($categoria){
        return "Bienvenido al curso: $curso, de la categoria: $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
});
