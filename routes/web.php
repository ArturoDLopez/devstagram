<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


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

//Llamar a un controlador, HomeController y el metodo invoke (/)
Route::get("/", HomeController::class);

//Grupo de rutas al controllador CursoController
Route::controller(CursoController::class)->group(function(){
    Route::get("cursos", "index")->name("cursos.index");
    Route::get("cursos/create", "create")->name("cursos.create");
    Route::post("cursos", [CursoController::class, 'store'])->name('cursos.store'); 
    Route::get("cursos/{curso}", "show")->name("cursos.show");
    Route::get("cursos/{curso}/edit", [CursoController::class, 'edit'])->name("cursos.edit");
    Route::put("cursos/{curso}", [CursoController::class, 'update'])->name("cursos.update");
    Route::delete("cursos/{curso}", [CursoController::class, "destroy"])->name("cursos.destroy");
});

/*
//Llamar a un controlador, CursoController y el metodo index (localhost/devstagram/public/cursos)
Route::get("cursos", [CursoController::class, "index"]);

//Llamar a un controlador, CursoController y el metodo create (localhost/devstagram/public/cursos/create)
Route::get("cursos/create", [CursoController::class, "create"]);

//Llamar a un controlador, CursoController y el metodo show (localhost/devstagram/public/cursos/curso)
Route::get("cursos/{curso}", [CursoController::class, "show"]);
 */

/* 
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
 */