<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemaController extends Controller
{
    //

    public function create() {

        return view('profesor.tema');
    }


    public function store(Request $request) {

        $tema = new Tema([

            'numero' => $request->get('numero'),
            'nombre' => $request->get('nombre')
        ]);

        $tema->save();
        return redirect('/home')->with('tema_creado','tema creado');
    }

    public function index(){

        $temas = Auth::user()->materias->temas;
        return view('profesor.tema',compact('temas'));
    }
}
