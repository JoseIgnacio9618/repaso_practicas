@extends('layouts.plantilla')

@section('title', $curso->id)

@section ('content')
    <h1>Bienvenido al curso: {{$curso['name']}} <!-- asi se escribe sin blade<?php //echo $curso ?> --> </h1>
    <br>
    <a href="{{ route('cursos.edit', ['id' => $curso->id]) }}">Editar curso</a>
    <br>
    <h3>{{$curso['description']}}</h3>
@endsection
