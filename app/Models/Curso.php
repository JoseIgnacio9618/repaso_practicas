<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
// esta linea puede no ponerse y laravel entendera que lo quieres guardar en el nombre del modelo en plural ingles
    protected $table = "cursos";


    //Aqui vamos a establecer un mutador para que el nombre se guarde en minisculas
    //y al pedirlo de nuevo que ponga las primeras letras en mayuscula
  protected function name():Attribute
    {

        return new Attribute(
            get:fn($value)=>ucwords(strtolower($value)),
            set:fn($value)=>strtolower($value)

        );
    }
}
