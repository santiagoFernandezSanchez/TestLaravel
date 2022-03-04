<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    //

    public function show() {



        $temas = DB::table('materias')
        ->join('temas', 'temas.materia_id', 'materias.id')
        ->select('*')
        ->where('temas.materia_id', auth()->user()->materia_id)
        ->get();

        return view('profesor.examen', compact('temas'));


    }


    public function store(Request $request) {

        $request->validate([

            'numero_preguntas'=>'min: 10| max: 15'
        ]);

        $examen = new Examen([

            'niveles' => $request->get('niveles'),
            'numero_preguntas' => $request->get('numero_preguntas'),
            'fecha_inicio' => $request->get('fecha_inicio'),
            'fecha_final'=> $request->get('fecha_final'),
            'tema_id'=> $request->get('tema_id')
        ]);

        $examen->save();
        return view('profesor.examen')->with('examen_creado', 'Examen creado con exito');

    }


}
