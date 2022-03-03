<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;
use App\Models\User;
use App\Http\Controllers\Auth;


class TemaController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {

        return view('profesor.tema');
    }


    public function store(Request $request) {



        $tema = new Tema([

            'numero' => $request->get('numero'),
            'nombre' => $request->get('nombre'),
            'materia_id' => Auth::user()->materias->id
        ]);

        $tema->save();
        return redirect('/home')->with('tema_creado','tema creado');
    }

    // public function index(){

    //     $temas = [];
    //     $temas = Auth::user()->materias->temas;
    //     return view('profesor.tema',compact('temas'));
    // }
}
