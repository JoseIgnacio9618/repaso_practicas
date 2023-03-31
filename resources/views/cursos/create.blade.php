@extends('layouts.plantilla')

@section('title', 'Home')

@section ('content')
    <h1>"En esta pagina podras crear un curso"</h1>
    <h1>"Aqui podras crear tu curso"</h1>

    <form action="{{route('create.curso')}}" method="post">

        @csrf

    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Descripción:
        <textarea type="text" name="description" rows="3" value="{{old('description')}}"></textarea>
    </label>

    @error('description')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <label>
        Categoria:
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>

    @error('categoria')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror

    <input type="submit" value="Enviar curso">

    </form>
@endsection
