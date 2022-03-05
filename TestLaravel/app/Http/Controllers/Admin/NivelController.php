<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nivel;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $nivels = Nivel::all();

        return view('admin.niveles', compact('nivels'));
    }


    public function create(){
        return view('admin.crearNivel');
    }

    
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
        ]);

        $nivel = new Nivel([
            'nombre' => $request->get('nombre')
        ]);

        $nivel->save();

        return redirect('/home/admin/niveles');
    }


    public function edit($id){
        
        $nivel = Nivel::find($id);
        return view('admin.editarNivel', compact('nivel'));
    }
    

    public function update(Request $request, Nivel $nivel){

        $request->validate([
            'nombre' => 'required'
        ]);

        $nivel->update($request->all());
        
        return redirect('/home/admin/niveles');
    }

    
    public function destroy($id) {

        $nivel = Nivel::findOrfail($id);
        $nivel->delete();

        return redirect('/home/admin/niveles');
    }
}
