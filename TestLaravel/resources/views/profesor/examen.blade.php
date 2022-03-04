@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h1>Crear examen</h1>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col-3"></div>
        <div class="col">
            <h3>Seleccione la dificultad:</h3>
            <form action="" method="post">
                @csrf
                <div class="input-group">
                    
                    <select class = "form-control">

                        <option value ="" selected>Selecciona una dificultad</option>
                        <option value ="">Básico</option>
                        <option value ="">Intermedio</option>
                        <option value ="">Avanzado</option>

                    </select>
                </div>

                <div class="form-group mt-4">
                    <label for="numero">
                        <h5>Número de preguntas</h5>
                    </label>
                    <input type="number" name="numero" id="numero" min="5" class="form-control" value="">
                </div>

                <button type="submit" class="btn btn-primary mt-4">Crear examen</button>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection