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
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('tema.create') }}">Editar tema</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('examen') }}">Editar examen</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('pregunta') }}">Editar pregunta</a>
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
                                        <th scope="col">(Asignatura)</th>
                                        <th scope="col">(Tema)</th>
                                        <th scope="col">(Nota)</th>
                                        <th scope="col">(Fecha)</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- BUCLE PARA MOSTRAR TODAS LAS CALIFICACIONES -->


                                    <tr>
                                        <td scope="row">(Nombre Asignatura)</td>
                                        <td>(Tema)</td>
                                        <td>(Nota)</td>
                                        <td>(Fecha)</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <!-- PRÓXIMOS EXÁMENES -->
                    <div class="row mt-5">
                        <div class="col">
                            <h3>Próximos exámenes</h3>
                        </div>
                    </div>

                    <!-- EXÁMENES PENDIENTES -->
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">(Asignatura)</th>
                                        <th scope="col">(Tema)</th>
                                        <th scope="col">(Fecha)</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- BUCLE PARA MOSTRAR TODAS LAS CALIFICACIONES -->
                                    <tr>
                                        <td scope="row">(Nombre Asignatura)</td>
                                        <td>(Tema)</td>
                                        <td>(Fecha)</td>
                                    </tr>

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
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('tema.create') }}">Editar tema</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('examen') }}">Editar examen</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('pregunta') }}">Editar pregunta</a>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4">
                        <div class="col d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('alumno') }}">Editar usuario</a>
                        </div>
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
