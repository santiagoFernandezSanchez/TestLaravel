@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @if ( (Auth::user()->rol) == 'profesor' )

                    <p>Soy profesor</p>

                    <p>Materia:{{ Auth::user()->materias->nombre }}</p>
                    <p>Tema:{{ Auth::user()->materias->id }}</p>
                    <p>Nivel: {{ $nombre_nivel[0]->nombre }}</p>
                        
                    @endif

                    @if ( Auth::user()->rol == 'alumno' )

                    <p>Soy alumno</p>
                        
                    @endif

                    @if ( Auth::user()->rol == 'admin' )

                    <p>Soy admin</p>
                        
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
