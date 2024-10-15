<?php

namespace App\Http\Controllers;

use App\Http\Requests\StroreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        //$cursos = Curso::all();

        $cursos = Curso::orderBy('id', 'desc')->paginate(10);
        
        return view("cursos.index", compact("cursos"));
    }

    public function create(){
        return view("cursos.create");
    }

    public function store(StroreCurso $request){

        /* //Agregar validaciones
        $request->validate([
            "name" => "required|min:3",
            "description" => ["required", 'min:10', 'max:200'],
            "category" => "required"
        ]);
 */
        /* $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save(); */

        /* $curso = Curso::create([
            'name' => $request->name,
            "description" => $request->description,
            "category" => $request->category
        ]); */

        $curso = Curso::create($request->all());
        return redirect()->route("cursos.show", $curso->id);
    }

    public function show($id){
        $curso = Curso::find($id);
        return view("cursos.show", compact("curso"));
        //return view("cursos.show", ["curso" => $curso]);
    }

    public function edit(Curso $curso){
        return view("cursos.edit", compact("curso"));
    }

    public function update(Curso $curso, Request $request){

        //Agregar validaciones
        $request->validate([
            "name" => "required|min:3",
            "description" => ["required", 'min:10', 'max:200'],
            "category" => "required"
        ],[
            'description.required' => 'Debe ingresar una descripción del curso'
        ],[
            'name' => 'nombre del curso'
        ]);


        /* $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save(); */

        $curso->update($request->all());
        
        return redirect()->route("cursos.show", $curso->id);
    }
}
