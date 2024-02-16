<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        // $cursos = Curso::all();
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        // return $request->all();
        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // // return $curso;
        // // guarda el registro
        // $curso->save();

        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'descripcion' => $request->descripcion,
        //     'categoria' => $request->categoria
        // ]);

        $curso = Curso::create($request->all());

        // redirecciona después de guardar el registro
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){

        // compact('curso'); // ['curso' => $curso]

        // $curso = Curso::find($id);

        // return $curso;

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){

        // $curso = Curso::find($id);
        // return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        // return $curso;
        // return $request->all();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // // return $curso;
        // $curso->save();

        $request->validate([
            'name' => 'required',
            'slug' => 'required | unique:cursos,slug,' . $curso->id,
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $curso->update($request->all());

        // redirecciona después de actualizar el registro
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        // return $curso;
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
