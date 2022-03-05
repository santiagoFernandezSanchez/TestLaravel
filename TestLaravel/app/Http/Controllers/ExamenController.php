<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Examen;

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

        $examen = new Examen([

            'niveles' => $request->get('niveles'),
            'numero_preguntas' => $request->get('numero_preguntas'),
            'fecha_inicio' => $request->get('fecha_inicio'),
            'fecha_final'=> $request->get('fecha_final'),
            'tema_id'=> $request->get('tema_id')
        ]);

        $examen->save();

        return redirect('/home/profesor/examen')->with('examen_creado', 'Examen creado con exito');
    }

    public function hacerExamen($id) {




        $examenTema = DB::table('examens')
        ->select('*')
        ->where('examens.id', $id);

        dd($examenTema);

        $examenPreguntas = DB::table('preguntas')
        ->join('temas','preguntas.tema_id','temas.id')
        ->join('examens','temas.id','examens.tema_id')
        ->select('*')
        ->where('preguntas.nivel',$examenTema->niveles)
        ->limit($examenTema->niveles)
        ->inRandomOrder();

        return view('alumno.hacer_examen',compact('examenTema','examenPreguntas'));



    }



}
