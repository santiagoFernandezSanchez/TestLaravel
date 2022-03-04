@extends('layouts.app')
@section('content')

<div class="container">

    @if(session('Exito'))

        <p class="alert alert-success">{{session('Exito')}}</p>

    @endif
    <form method="post" action="{{ route('pregunta.store') }}">
    @csrf
    <!-- TEMA -->

        <!-- TÍTULO -->
        <div class="row mt-4">
            <div class="col d-flex justify-content-center">
                <h3>Tema</h3>
            </div>
        </div>

        <!-- SELECT -->
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col">

                <select class="form-select" aria-label="Default select example" name = "tema_id">

                    <option selected>Seleccione un tema</option>

                    @foreach ( $temas as $tema )

                        <option value="{{ $tema->id }}"> Tema {{ $tema->numero }}: {{ $tema->nombre }} </option>

                    @endforeach

                </select>

            </div>
            <div class="col-3"></div>
        </div>

        <!-- SELECT -->
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col">

                <select class="form-select" aria-label="Default select example" name = "nivel">

                    <option selected>Seleccione un nivel</option>

                        <option value="Básico">Básico</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Avanzado">Avanzado</option>


                </select>

            </div>
            <div class="col-3"></div>
        </div>


        <!-- PREGUNTA -->

        <!-- TÍTULO -->
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <h3>Pregunta</h3>
            </div>
        </div>

        <!-- INPUT PREGUNTA -->
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Pregunta</span>
                    </div>
                    <input type="text" class="form-control" name = "enunciado">
                </div>
            </div>
            <div class="col-3"></div>
        </div>



        <!-- OPCIONES -->

        <!-- TÍTULO -->
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <h3>Opciones</h3>
            </div>
        </div>

        <!-- RESPUESTA 1 -->
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Respuesta 1</span>
                    </div>
                    <input type="text" class="form-control" name="respuesta1">
                </div>
            </div>
            <div class="col-3"></div>
        </div>


        <!-- RESPUESTA 2 -->
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Respuesta 2</span>
                    </div>
                    <input type="text" class="form-control" name="respuesta2">
                </div>
            </div>
            <div class="col-3"></div>
        </div>


        <!-- RESPUESTA 3 -->
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Respuesta 3</span>
                    </div>
                    <input type="text" class="form-control" name="respuesta3">
                </div>
            </div>
            <div class="col-3"></div>
        </div>

        <!-- RESPUESTA 4 -->
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Respuesta 4</span>
                    </div>
                    <input type="text" class="form-control" name="respuesta4">
                </div>
            </div>
            <div class="col-3"></div>
        </div>


        <!-- RESPUESTA CORRECTA -->

        <!-- TÍTULO -->
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <h3>Respuesta correcta</h3>
            </div>
        </div>

        <!-- RESPUESTA CORRECTA -->
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Respuesta Correcta</span>
                    </div>
                    <input type="text" class="form-control" name="correcta">
                </div>
            </div>
            <div class="col-3"></div>
        </div>

        <!-- CREAR PREGUNTA -->
        <div class="row mt-4">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg">Crear pregunta</button>
            </div>
        </div>

    </form>
</div>
@endsection