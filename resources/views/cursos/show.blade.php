@extends('layouts.plantilla')

@section('title', 'Home')

@section ('content')
    <h1>Bienvenido al curso: {{$curso}} <!-- asi se escribe sin blade<?php //echo $curso ?> --> </h1>
@endsection
