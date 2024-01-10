@extends('layouts.plantilla')

@section('title', 'Cursos ' . $curso->name)

@section('content')
    <h1>Bienvenido/a al curso {{ $curso->name }}</h1><br>
    <a 
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" 
        href="{{ route('cursos.index') }}">Volver a cursos</a><br>
    <p class="mt-5"><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <p class="my-5">Descripcion: {{ $curso->descripcion }}</p>
@endsection