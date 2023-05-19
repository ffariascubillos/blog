@extends('layouts.plantilla')

@section('title','Cursos Edit')

@section('content')

<div class="container container mx-auto">
    <h1 class="my-5 text-center">En esta página podrás editar un curso</h1>
    <div class="w-full max-w-xs m-auto">
        <form action="{{route('cursos.update', $curso)}}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            @csrf

            @method('put')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nombre:
                    <input type="text" name="name" value="{{$curso->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label>    
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                    Descripcion:
                    <textarea name="descripcion" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$curso->descripcion}}</textarea>
                </label>    
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="categoria">
                    Categoria:
                    <input type="text" name="categoria" value="{{$curso->categoria}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label>    
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <input type="submit" value="Actualizar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label>    
            </div>
        </form>
    </div>
</div>

@endsection
