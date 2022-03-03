@extends('layouts.app')
@section('content')

<div class="container">

    <form method="post" action="">

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

                <select class="form-select" aria-label="Default select example">

                    <option selected>Seleccione un tema</option>

                    {{ $temas = Auth::user()->materias->temas }}

                    @foreach ( $temas as $tema )

                        <option value="{{ $tema->nombre }}"> Tema {{ $tema->numero }}: {{ $tema->nombre }} </option>

                    @endforeach

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
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-3"></div>
        </div>



        <!-- RESPUESTAS INCORRECTAS -->

        <!-- TÍTULO -->
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <h3>Respuestas incorrectas</h3>
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
                    <input type="text" class="form-control">
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
                    <input type="text" class="form-control">
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
                    <input type="text" class="form-control">
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
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row mt-4">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg">Crear pregunta</button>
            </div>
        </div>

    </form>
</div>
@endsection