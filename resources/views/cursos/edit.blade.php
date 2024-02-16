@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')

<h1>En esta página podrás editar un cursos</h1>
<a href="{{ route('cursos.index') }}">Volver a cursos</a>
<br><br>
<form action="{{route('cursos.update', $curso)}}" method="POST">

    @csrf

    @method('put')

    <label for="name">
        Nombre
        <br>
        <input name="name" type="text" placeholder="name" value="{{ old('name', $curso->name) }}">
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
        <input name="slug" type="text" placeholder="slug" value="{{ old('slug', $curso->slug) }}">
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
        <textarea name="descripcion" rows="5" placeholder="Descripción del curso ...">{{ old('descripcion', $curso->descripcion) }}</textarea>
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
        <input name="categoria" type="text" placeholder="categoria" value="{{ old('categoria', $curso->categoria) }}">
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