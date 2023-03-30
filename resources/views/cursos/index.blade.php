@extends('layouts.plantilla')

@section('title', 'Home')

@section ('content')
    <h1>Bievenido a la pagina principal de cursos </h1>

    <a href="{{route('cursos.create')}}">Crear Curso</a>

    <ul>

        <?php
        /*Con este codigo conseguimos que cada uno de los cursos sea un enlace a
        cursos.show +/nombredelcurso*/
        foreach ($cursos as $key => $value) {
    echo '<li>
        <a href="'.route('cursos.show', ['id' => $value['id']]).'">'.
         htmlspecialchars($value['name']) .
         '</a></li>';
        }
        echo $cursos ->links()
        ?>

    </ul>



@endsection
