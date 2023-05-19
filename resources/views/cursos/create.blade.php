@extends('layouts.plantilla')

@section('title','Cursos Create')

@section('content')

<div class="container container mx-auto">
    <h1 class="my-5 text-center">En esta página podrás crear un curso</h1>
    <div class="w-full max-w-xs m-auto">
        <form action="{{route('cursos.store')}}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nombre:
                    <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('name')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                </label> 
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                    Descripcion:
                    <textarea name="descripcion" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @error('descripcion')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                </label>    
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="categoria">
                    Categoria:
                    <input type="text" name="categoria" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('categoria')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                </label>    
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <input type="submit" value="Enviar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label>    
            </div>
        </form>
    </div>
</div>

@endsection
