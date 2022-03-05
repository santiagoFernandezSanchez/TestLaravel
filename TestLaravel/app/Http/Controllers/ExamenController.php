<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        ->join('temas', 'temas.id','examens.tema_id')
        ->select('*')
        ->where('examens.id', $id)->get();




        $examenPreguntas = DB::table('preguntas')
        ->join('temas','preguntas.tema_id','temas.id')
        ->join('examens','temas.id','examens.tema_id')
        ->select('preguntas.*')
        ->where('preguntas.nivel',$examenTema->first()->niveles)
        ->limit($examenTema->first()->numero_preguntas)
        ->inRandomOrder()->get();



        $tema = $examenTema->first();

        return view('alumno.hacer_examen',compact('tema','examenPreguntas'));



    }

    public function corregirExamen(Request $request) {

        $contador = 0;
        $flag=2;
        $comparar;

        $preguntas = $request->all();
        foreach ($preguntas as  $value) {
            # code...

            if($flag%2==0) {

                $comparar = $value;

            } else {

                if($comparar == $value) {

                    $contador++;
                    echo($comparar);
                }
            }

            $flag++;


        }




    }



}
