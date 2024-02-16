@extends('layouts.plantilla')

@section('title', 'Cursos ' . $curso->name)

@section('content')
    <h1>Bienvenido/a al curso {{ $curso->name }}</h1><br>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a><br><br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar Curso</a>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <p>Descripcion: {{ $curso->descripcion }}</p>

    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection