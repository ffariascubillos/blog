@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1 class="my-5">bienvenido a la página principal de cursos</h1>
    <a href="{{ route('home') }}">Home</a> | 
    <a 
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" 
        href="{{ route('cursos.create') }}">
        Crear curso
    </a>
    <ul class="my-5">
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}

@endsection