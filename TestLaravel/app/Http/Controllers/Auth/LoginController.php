<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login(Request $request){

    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ],[
    //         'email.required' => 'El campo email no puede estar vacío.',
    //         'password.required' => 'El campo contraseña no puede estar vacío.'
    //     ]);
        
    //     if( $user = User::where('rol', 'profesor') ){
    //         return view('indexprofesor');
    //     } 
        
    //     if( $user = User::where('rol', 'alumno') ){
    //         return view('indexalumno');
    //     } 
        
    //     if( $user = User::where('rol', 'admin') ){
    //         return view('indexadmin');
    //     }
        
    //     return view('login');
        
    // }
}
