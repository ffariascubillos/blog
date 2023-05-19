<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() // muestra pag. principal
    {

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        // return $request->all();  // Devuelve objeto con todos los campos del form
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        // return $curso;
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        // $curso = Curso::find($curso);

        // return $curso;
        // return view('cursos.show', ['curso' => $curso]);
        
        return view('cursos.show', compact('curso')); // ['curso' => $curso]
    }

    public function edit(Curso $curso)
    {
        // $curso = Curso::find($id);
        // return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        // return $curso;
        // return $request->all();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        // return $curso;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}
