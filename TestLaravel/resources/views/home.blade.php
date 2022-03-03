@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Has iniciado sesión como ') }} {{ Auth::user()->rol }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ( (Auth::user()->rol) == 'profesor' )

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('tema') }}">Crear tema</a>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('examen') }}">Crear examen</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('pregunta') }}">Crear pregunta</a>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('alumno') }}">Añadir alumno</a>
                        </div>
                    </div>   

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
