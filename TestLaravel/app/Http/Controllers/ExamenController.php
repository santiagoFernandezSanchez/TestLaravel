<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    //

    public function show() {

    $examenes = auth()->user()->materias->temas->first()->examens;

    return view('profesor.examen',compact('examenes'));


    }
}
