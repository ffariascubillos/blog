@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
    <h1>Hola bienvenidos al Home!</h1>
    <a href="{{ route('cursos.index') }}">Ver cursos</a>
@endsection