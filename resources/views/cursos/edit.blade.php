@extends('layouts.plantilla')

@section('title', 'Editar')

@section ('content')
<form method="POST" action="{{ route('curso.update', ['id' => $curso->id]) }}">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" name="name" value="{{ $curso->name }}">
    <br>
    <label for="description">Descripción:</label>
    <textarea name="description">{{ $curso->description }}</textarea>
    <br>
    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" value="{{ $curso->categoria }}">
    <br>
    <button type="submit">Actualizar curso</button>
</form>
@endsection
