@extends('layouts.plantilla')

@section('title', 'Cursos ' . $curso)

@section('content')
    <h1>Bienvenido/a al curso {{ $curso }}</h1>
@endsection