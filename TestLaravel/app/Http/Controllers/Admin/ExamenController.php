<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Examen;
use Illuminate\Support\Facades\DB;

class ExamenController extends Controller
{

    public function index(){
        //
        $examens = Examen::all();

        return view('admin.examenes', compact('examens'));
    }


    public function create(){
        
        $temas = DB::table('materias')
        ->join('temas', 'temas.materia_id', 'materias.id')
        ->select('*')
        ->get();

        return view('admin.crearExamen', compact('temas'));
    }

    
    public function store(Request $request){

        $request->validate([
            'niveles' => 'required',
            'numero_preguntas' => 'required|numeric',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'tema_id' => 'required|numeric'
        ]);

        $examen = new Examen([
            'niveles' => $request->get('niveles'),
            'numero_preguntas' => $request->get('numero_preguntas'),
            'fecha_inicio' => $request->get('fecha_inicio'),
            'fecha_final' => $request->get('fecha_final'),
            'tema_id' => $request->get('tema_id')
        ]);

        $examen->save();

        return redirect('/home/admin/examenes');
    }


    public function edit($id){
        
        $examen = Examen::find($id);
        return view('admin.editarExamen', compact('examen'));
    }
    

    public function update(Request $request, Examen $examen){

        $request->validate([
            'niveles' => 'required',
            'numero_preguntas' => 'required|numeric',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'tema_id' => 'required|numeric'
        ]);

        $examen->update($request->all());
        
        return redirect('/home/admin/examenes');
    }

    
    public function destroy($id) {

        $examen = Examen::findOrfail($id);
        $examen->delete();

        return redirect('/home/admin/examenes');
    }
}


