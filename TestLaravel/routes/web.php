<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

Route::view('/home/profesor/tema', 'profesor.tema')->name('tema');

Route::view('/home/profesor/examen', 'profesor.examen')->name('examen');

Route::view('/home/profesor/pregunta', 'profesor.pregunta')->name('pregunta');

// Route::post('/', [PreguntaController::class, 'metodo']);

Route::view('/home/profesor/alumno', 'profesor.alumno')->name('alumno');