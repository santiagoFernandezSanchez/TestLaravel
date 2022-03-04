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
            <h3>Seleccione un nivel: </h3>
            <form action="" method="post">
                @csrf
                <div class="input-group">
                    <div>
                            <label for="facil"><h5>Fácil</h5></label>
                            <input id="facil" type="radio">
                        
                      
                            <label for="medio"><h5>Medio</h5></label>
                            <input id="medio" type="radio">
                    
                            <label for="dificil"><h5>Difícil</h5></label>
                            <input id="dificil" type="radio">

                    </div>
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