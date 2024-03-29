@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')

<h1>En esta página podrás crear cursos</h1>
<a href="{{ route('cursos.index') }}">Volver a cursos</a>
<br><br>
<form action="{{route('cursos.store')}}" method="POST">
    @csrf

    <label for="name">
        Nombre
        <br>
        <input name="name" type="text" placeholder="name" value="{{ old('name') }}">
    </label>

    @error('name')
        <br>
        <span>*{{ $message }}</span>
        <br>
    @enderror
    <br>

    <label for="slug">
        Slug 
        <br>
        <input name="slug" type="text" placeholder="slug" value="{{ old('slug') }}">
    </label>
    @error('slug')
        <br>
        <span>*{{ $message }}</span>
        <br>
    @enderror
    <br>

    <label for="descripcion">
        Descripción
        <br>
        <textarea name="descripcion" rows="5" placeholder="Descripción del curso ...">{{ old('descripcion') }}</textarea>
    </label>

    @error('descripcion')
        <br>
        <span>*{{ $message }}</span>
        <br>
    @enderror
    <br>

    <label for="categoria">
        Categoría 
        <br>
        <input name="categoria" type="text" placeholder="categoria" value="{{ old('categoria') }}">
    </label>
    @error('categoria')
        <br>
        <span>*{{ $message }}</span>
        <br>
    @enderror
    <br>

    <button type="submit">Enviar formulario</button>
</form>

@endsection