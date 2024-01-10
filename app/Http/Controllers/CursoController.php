<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        // $cursos = Curso::all();
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){

        // compact('curso'); // ['curso' => $curso]

        $curso = Curso::find($id);

        // return $curso;

        return view('cursos.show', compact('curso'));
    }
}
