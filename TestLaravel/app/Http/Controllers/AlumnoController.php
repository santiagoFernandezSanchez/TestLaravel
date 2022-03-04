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
        ->update(['materia_id' => $request->get('materia_id')]);



        return redirect('/home/profesor/alumno')->with('exito', 'Usuario añadido con éxito');

    }


}
