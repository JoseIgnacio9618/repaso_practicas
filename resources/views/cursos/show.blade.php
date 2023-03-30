@extends('layouts.plantilla')

@section('title', $curso['name'])

@section ('content')
    <h1>Bienvenido al curso: {{$curso['name']}} <!-- asi se escribe sin blade<?php //echo $curso ?> --> </h1>
    <br>
    <br>
    <br>
    <h3>{{$curso['description']}}</h3>
@endsection
