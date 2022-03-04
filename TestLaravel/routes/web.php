<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\ExamenController;





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

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/home/profesor/tema/create', [TemaController::class, 'create'])->name('tema.create');

Route::post('/home/profesor/tema', [TemaController::class,'store'])->name('tema.store');

Route::get('/home/profesor/pregunta', [PreguntaController::class, 'index'])->name('pregunta');

Route::post('/home/profesor/pregunta', [PreguntaController::class, 'store'])->name('pregunta.store');

Route::get('/home/profesor/examen', [ExamenController::class, 'show'])->name('examen');

Route::post('/home/profesor/examen', [ExamenController::class, 'store'])->name('examen.store');

Route::get('/home/profesor/alumno', [AlumnoController::class, 'inscrito'])->name('alumno');

Route::post('/home/profesor/alumno', [AlumnoController::class, 'update'])->name('alumno.update');

Route::get('/home/alumno/examen', [AlumnoController::class, 'mostrarNota'])->name('nota');
