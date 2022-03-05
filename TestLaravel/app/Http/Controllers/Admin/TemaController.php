<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tema;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $temas = Tema::all();

        return view('admin.tema', compact('temas'));
    }


    public function create(){
        
        $ultimoTema = DB::table('temas')
        ->select('numero');
        
        return view('admin.crearTema', compact('ultimoTema'));
    }

    
    public function store(Request $request){

        $request->validate([
            'materia_id' => 'required|numeric',
            'numero' => 'required|numeric',
            'nombre' => 'required',
        ]);

        $tema = new Tema([
            'materia_id' => $request->get('materia_id'),
            'numero' => $request->get('numero'),
            'nombre' => $request->get('nombre')
        ]);

        $tema->save();

        return redirect('/home/admin/temas');
    }

    
    public function edit($id){
        
        $tema = Tema::find($id);
        return view('admin.editarTema', compact('tema'));
    }

    

    public function update(Request $request, Tema $tema){

        $request->validate([
            'materia_id' => 'required|numeric',
            'numero' => 'required|numeric',
            'nombre' => 'required',
        ]);

        $tema->update($request->all());
        
        return redirect('/home/admin/temas');
    }

    
    public function destroy($id) {

        $tema = Tema::findOrfail($id);
        $tema->delete();

        return redirect('/home/admin/temas');
    }
}
