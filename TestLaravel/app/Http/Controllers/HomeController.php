<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Materia;
use App\Models\Tema;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {

        //Solo vista profesores
         $nombre_nivel = DB::table('materias')
         ->join('nivels', 'nivels.id', '=', 'materias.nivel_id')
         ->select('nivels.nombre')
         ->where('materias.id', auth()->id())
         ->get();


        //Solo vista profesores
         $nombre_materia = DB::table('materias')
         ->select('materias.nombre')
         ->where('id', auth()->id())
         ->get();


        $notaExamen = DB::table('temas')
        ->select('*')
        ->join('examens','temas.id','examens.tema_id')
        ->join('examen_users', 'examens.id', 'examen_users.examen_id')
        ->join('users', 'examen_users.user_id', 'users.id')
        ->where('examen_users.user_id',auth()->user()->id)
        ->whereNotNull('fecha_validacion')
        ->get();

        $examen_pendiente = DB::table('materias')
        ->join('temas', 'materias.id', 'temas.materia_id')
        ->join('examens', 'temas.id', 'examens.tema_id')
        ->select('examens.id', 'examens.niveles', 'examens.numero_preguntas', 'examens.fecha_inicio', 'examens.fecha_final', 'examens.tema_id')
        ->where('materias.id', auth()->user()->materia_id)
        ->get();


         return view('home', compact('nombre_nivel', 'nombre_materia','notaExamen', 'examen_pendiente'));
     }
}
