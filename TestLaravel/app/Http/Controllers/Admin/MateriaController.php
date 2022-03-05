<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materia;
use Illuminate\Support\Facades\DB;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $materias = Materia::all();

        return view('admin.Materias', compact('materias'));
    }


    public function create(){

        $limite = DB::table('materias')->orderBy('nivel_id', 'desc')->first()->nivel_id;

        return view('admin.crearMateria', compact('limite'));
    }

    
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'nivel_id' => 'required'
        ]);

        $materia = new Materia([
            'nombre' => $request->get('nombre'),
            'nivel_id' => $request->get('nivel_id')
        ]);


        $materia->save();

        return redirect('/home/admin/materias');
    }


    public function edit($id){
        
        $materia = Materia::find($id);

        $limite = DB::table('materias')->orderBy('nivel_id', 'desc')->first()->nivel_id;

        return view('admin.editarMateria', compact('materia', 'limite'));
    }
    

    public function update(Request $request, materia $materia){

        $request->validate([
            'nombre' => 'required'
        ]);

        $materia->update($request->all());
        
        return redirect('/home/admin/materias');
    }

    
    public function destroy($id) {

        $materia = materia::findOrfail($id);
        $materia->delete();

        return redirect('/home/admin/materias');
    }
}
