<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view("cursos.index");
    }
    public function create(){
        return view("cursos.create");
    }
    //Asi se mandan variables a la vista curso
    public function show($curso){
        return view("cursos.show",['curso'=>$curso]);
    }

}
