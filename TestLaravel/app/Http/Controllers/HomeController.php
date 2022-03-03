<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nombre_nivel = DB::table('materias')
        ->join('nivels', 'nivels.id', '=', 'materias.nivel_id')
        ->select('nivels.nombre')
        ->where('user_id', auth()->id())
        ->get();

        return view('home', compact('nombre_nivel'));
    }
}
