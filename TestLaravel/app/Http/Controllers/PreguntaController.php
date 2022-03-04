<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    public function index(){

        $temas = auth()->user()->materias->temas;

        return view('profesor.pregunta', compact('temas'));
    }

    public function store(Request $request){

        $pregunta = new Pregunta;

        $pregunta->tema_id = $request->get('tema_id');
        $pregunta->nivel = $request->get('nivel');
        $pregunta->enunciado = $request->get('enunciado');
        $pregunta->respuesta1 = $request->get('respuesta1');
        $pregunta->respuesta2 = $request->get('respuesta2');
        $pregunta->respuesta3 = $request->get('respuesta3');
        $pregunta->respuesta4 = $request->get('respuesta4');
        $pregunta->correcta = $request->get('correcta');

        $pregunta->save();

        return redirect('/home/profesor/pregunta')->with('Exito', 'Pregunta creada con éxito');
    }
}
