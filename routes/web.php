<?php

use App\Http\Controllers\heladeriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController; // importo MiController.php
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController; //importo el controlador
use App\Http\Controllers\infoController; //importo el controlador infoController
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'miprimeraruta', function(){
        return 'Bienvendos';
    });

Route::get('minombre/{nombre}/{edad}', function($nombre, $edad){
    return 'Hola mi nombre es: ' . $nombre . ' Mi edad es ' . $edad;

});

//creamos ruta para usar MiController
//ruta, clase del controlador, metodo
Route::get('micontrolador/{nombre}', [MiController::class, 'hola']);//llama a la clase mi controller y el metodo prueba()

Route::get('heladeriaController/{numCubierta}', [heladeriaController::class, 'cubierta']);

Route::get('precio/{canPrecio}', [ControladorPrecios::class, 'precio']);

Route::get('iva/{nombreart}/{canPrecio}', [ControladorPrecios::class, 'getIVA']);

Route::resource('cursos', CursoController::class);

Route::get('nosotros', [InfoController::class, 'info']);
