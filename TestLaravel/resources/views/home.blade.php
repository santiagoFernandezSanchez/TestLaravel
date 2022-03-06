@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Menú {{ Auth::user()->rol }} </h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- PROFESOR -->
                    @if ( Auth::user()->rol == 'profesor' )

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('tema.create') }}">Crear tema</a>
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

                    <p>Materia: {{ $nombre_materia[0]->nombre }}</p>

                    <p>Nivel: {{ $nombre_nivel[0]->nombre }}</p>

                    @endif

                    <!-- ALUMNO -->
                    @if ( Auth::user()->rol == 'alumno' )

                    @if (session('examen_terminado'))

                    <div class="alert alert-success">
                        {{ session('examen_terminado') }}
                    </div>

                    @endif

                    <!-- MIS CALIFICACIONES -->
                    <div class="row mt-5">
                        <div class="col">
                            <h3>Mis calificaciones</h3>
                        </div>
                    </div>

                    <!-- CALIFICACIÓN EXÁMENES -->
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>

                                        <th scope="col">Tema</th>
                                        <th scope="col">Nota</th>
                                        <th scope="col">Fecha realizada</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- BUCLE PARA MOSTRAR TODAS LAS CALIFICACIONES -->

                                    @foreach ($notaExamen as $nota)

                                    <tr>

                                        <td>Tema {{ $nota->numero }}: {{ $nota->nombre }}</td>
                                        <td>{{ $nota->preguntas_acertadas }}</td>
                                        <td>{{ $nota->fecha_validacion }}</td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <!-- EXÁMENES PENDIENTES -->
                    <div class="row mt-5">
                        <div class="col">
                            <h3>Exámenes pendientes</h3>
                        </div>
                    </div>

                    <!-- EXÁMENES PENDIENTES -->
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>

                                        <th scope="col">Id Examen</th>
                                        <th scope="col">Tema</th>
                                        <th scope="col">Fecha Inicio</th>
                                        <th scope="col">Fecha Fin</th>
                                        <th scope="col">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- BUCLE PARA MOSTRAR TODAS LAS CALIFICACIONES -->

                                    @foreach($examen_pendiente as $pendiente)

                                    <tr>

                                        <td>{{ $pendiente->id }}</td>
                                        <td>Tema {{ $pendiente->numero }}: {{ $pendiente->nombre}}</td>
                                        <td>{{ $pendiente->fecha_inicio }}</td>
                                        <td>{{ $pendiente->fecha_final }}</td>
                                        <td><a class="btn btn-primary" href="{{ route('alumno.haceExamen', $pendiente->id) }}">Realizar examen</a></td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <!--  -->
                    @endif

                    <!-- ADMINISTRADOR -->
                    @if ( Auth::user()->rol == 'admin' )

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('temas.index') }}">Editar tema</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('examenes.index') }}">Editar examen</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('preguntas.index') }}">Editar pregunta</a>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('usuarios.index') }}">Editar usuario</a>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('niveles.index') }}">Editar niveles</a>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('materias.index') }}">Editar materias</a>
                        </div>
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
