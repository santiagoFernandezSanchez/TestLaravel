<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $preguntas = Pregunta::all();

        return view('admin.preguntas', compact('preguntas'));
    }


    public function create(){    
        return view('admin.crearPregunta');
    }

    
    public function store(Request $request){

        $request->validate([
            'nivel' => 'required',
            'enunciado' => 'required',
            'respuesta1' => 'required',
            'respuesta2' => 'required',
            'respuesta3' => 'required',
            'respuesta4' => 'required',
            'correcta' => 'required',
            'tema_id' => 'required|numeric'
        ]);

        $pregunta = new Pregunta([
            'nivel' => $request->get('nivel'),
            'enunciado' => $request->get('enunciado'),
            'respuesta1' => $request->get('respuesta1'),
            'respuesta2' => $request->get('respuesta2'),
            'respuesta3' => $request->get('respuesta3'),
            'respuesta4' => $request->get('respuesta4'),
            'correcta' => $request->get('correcta'),
            'tema_id' => $request->get('tema_id')
        ]);

        $pregunta->save();

        return redirect('/home/admin/preguntas');
    }

    
    public function edit($id){
        
        $pregunta = Pregunta::find($id);
        return view('admin.editarPregunta', compact('pregunta'));
    }

    

    public function update(Request $request, Pregunta $pregunta){

        $request->validate([
            'name' => 'required',
            'rol' => 'required',
            'email' => 'required',
            'materia_id' => 'required|numeric'
        ]);

        $pregunta->update($request->all());
        
        return redirect('/home/admin/preguntas');
    }

    
    public function destroy($id) {

        $pregunta = Pregunta::findOrfail($id);
        $pregunta->delete();

        return redirect('/home/admin/preguntas');
    }
}
