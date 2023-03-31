<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos= Curso::paginate();

        return view("cursos.index", compact('cursos'));
    }
    public function create(){
        return view("cursos.create");
    }

    public function newCurso(Request $request){
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();


        return view("cursos.show",compact('curso'));
    }

    public function editCurso($id){
        $curso= Curso::find($id);
        return view("cursos.edit",compact('curso'));

    }

    public function modificateCurso(Request $request){
        $curso= Curso::find($request->id);


        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();


        return view("cursos.show",compact('curso'));

    }

    //Asi se mandan variables a la vista curso
    public function show($id){
        $curso= Curso::find($id);
        return view("cursos.show",['curso'=>$curso]);
    }
}
