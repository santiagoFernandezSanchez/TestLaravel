<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\Auth;

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

Route::get('/home/profesor/tema', [TemaController::class, 'create'])->name('tema.create');


Route::get('/home/profesor/tema', [TemaController::class, 'store'])->name('tema.store');
Route::post('/home/profsor/tema', [TemaController::class,'store'])->name('tema.store');


Route::view('/home/profesor/examen', 'profesor.examen')->name('examen');

Route::view('/home/profesor/pregunta', 'profesor.pregunta')->name('pregunta');

Route::view('/home/profesor/alumno', 'profesor.alumno')->name('alumno');
