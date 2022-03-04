<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    //


    public function create() {

        $temas = DB::table('materias')
        ->join('temas', 'temas.materia_id', 'materias.id')
        ->select('*')
        ->where('temas.materia_id', auth()->user()->materia_id)
        ->get();

        return view('profesor.tema', compact('temas'));
    }


    public function store(Request $request) {



        $tema = new Tema([

            'numero' => $request->get('numero'),
            'nombre' => $request->get('nombre'),
            'materia_id' => auth()->user()->materias->id
        ]);

        $tema->save();
        return redirect('/home')->with('tema_creado','tema creado');
    }


}
