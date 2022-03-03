<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;
use App\Models\User;
use App\Http\Controllers\Auth;

class TemaController extends Controller
{
    //


    public function create() {

        return view('profesor.tema');
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
