<?php

use App\Http\Controllers\Admin\ExamenController as AdminExamenController;
use App\Http\Controllers\Admin\MateriaController;
use App\Http\Controllers\Admin\NivelController;
use App\Http\Controllers\Admin\PreguntaController as AdminPreguntaController;
use App\Http\Controllers\Admin\TemaController as AdminTemaController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
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

//Vista principal de los 3 roles
Route::get('/home', [HomeController::class, 'index']);

// PROFESOR //

// Tema
Route::get('/home/profesor/tema/create', [TemaController::class, 'create'])->name('tema.create')->middleware('auth');
Route::post('/home/profesor/tema', [TemaController::class,'store'])->name('tema.store');

// Pregunta
Route::get('/home/profesor/pregunta', [PreguntaController::class, 'index'])->name('pregunta')->middleware('auth');
Route::post('/home/profesor/pregunta', [PreguntaController::class, 'store'])->name('pregunta.store');

// Examen
Route::get('/home/profesor/examen', [ExamenController::class, 'show'])->name('examen')->middleware('auth');
Route::post('/home/profesor/examen', [ExamenController::class, 'store'])->name('examen.store');

// Alumno
Route::get('/home/profesor/alumno', [AlumnoController::class, 'inscrito'])->name('alumno')->middleware('auth');
Route::post('/home/profesor/alumno', [AlumnoController::class, 'update'])->name('alumno.update');


// ALUMNO realiza examen //
Route::get('home/alumno/hacerExamen/{id}', [ExamenController::class, 'hacerExamen'])->name('alumno.haceExamen')->middleware('auth');

// Examen Corregir //
Route::post('home/alumno/examenHecho', [ExamenController::class, 'corregirExamen'])->name('corregir');


// --ADMIN-- //

// Usuarios
Route::resource('/home/admin/usuarios', AdminUserController::class)->middleware('auth');

// Temas
Route::resource('/home/admin/temas', AdminTemaController::class)->middleware('auth');

// Examenes
Route::resource('/home/admin/examenes', AdminExamenController::class)->middleware('auth');

// Preguntas
Route::resource('/home/admin/preguntas', AdminPreguntaController::class)->middleware('auth');

// Niveles
Route::resource('/home/admin/niveles', NivelController::class)->middleware('auth');

// Materias
Route::resource('/home/admin/materias', MateriaController::class)->middleware('auth');
