<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function index(){
        //
        $usuarios = User::all();

        return view('admin.usuarios', compact('usuarios'));
    }


    public function create(){    
        return view('admin.crearUsuario');
    }

    
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'rol' => 'required',
            'email' => 'required',
            'password' => 'required',
            'materia_id' => 'required|numeric'
        ]);

        $usuario = new User([
            'name' => $request->get('name'),
            'rol' => $request->get('rol'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'materia_id' => $request->get('materia_id')
        ]);

        $usuario->save();

        return redirect('/home/admin/usuarios');
    }

    
    public function edit($id){
        
        $usuario = User::find($id);
        return view('admin.editarUsuario', compact('usuario'));
    }

    

    public function update(Request $request, User $usuario){

        $request->validate([
            'name' => 'required',
            'rol' => 'required',
            'email' => 'required',
            'materia_id' => 'required|numeric'
        ]);

        $usuario->update($request->all());
        
        return redirect('/home/admin/usuarios');
    }

    
    public function destroy($id) {

        $usuario = User::findOrfail($id);
        $usuario->delete();

        return redirect('/home/admin/usuarios');
    }
}
