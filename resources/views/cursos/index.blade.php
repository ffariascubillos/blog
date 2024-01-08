@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>bienvenido a la página principal de cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->name }}</li>
        @endforeach
    </ul>

    {{ $cursos->links() }}

@endsection