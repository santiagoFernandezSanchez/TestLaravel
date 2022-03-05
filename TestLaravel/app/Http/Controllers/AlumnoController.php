<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{


    public function inscrito(){

        $listado = DB::table('users')
        ->select('id', 'name', 'rol')
        ->where('rol', 'alumno')
        ->where('materia_id', Auth()->id())
        ->get();

        $listado2 = DB::table('users')
        ->select('id', 'name', 'rol')
        ->where('rol', 'alumno')
        ->whereNULL('materia_id')
        ->get();

        return view('profesor.alumno', compact('listado', 'listado2'));

    }

    public function update(Request $request){

        DB::table('users')
        ->select('*')
        ->where('id', $request->id)
        ->update(['materia_id' => Auth()->id()]);

        return redirect('/home/profesor/alumno')->with('exito', 'Usuario añadido con éxito');

    }

    public function mostrarNota () {


        $notaExamen = DB::table('temas')
        ->select('*')
        ->join('examens','temas.id','examens.tema_id')
        ->join('examen_users', 'examens.id', 'examen_users.examen_id')
        ->join('users', 'examen_users.user_id', 'users.id')
        ->where('examen_users.user_id',auth()->user()->id)
        ->whereNotNull('fecha_validacion')
        ->get();







        return view('home',compact('notaExamen'));




    }


}
