<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Doctrine\DBAL\Schema\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Asi se crea una ruta
Route::get('/', HomeController::class);


Route::get('cursos', [CursoController::class, 'index'] )->name('cursos');

//Debe ir arriba para que no tome create como parametro de la ruta de cursos
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

//Asi se pasa una variable por la url si se pone ? al final se esta indicando que la
//variable es opcional
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');


//Asi se crean grupos de rutas en este caso hemos dupicado las que ya hemos hecho

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index' )->name('cursos');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::get('cursos/{id}','show')->name('cursos.show');
});
