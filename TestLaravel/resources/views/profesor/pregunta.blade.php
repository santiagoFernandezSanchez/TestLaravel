

@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                   Crear pregunta
                </h3>
            </div>

            <div class="panel-body text-center">

                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating">
                        <label for="enunciado">Enunciado</label>
                        <textarea name="enunciado" id="enunciado"></textarea>
                    </div>

                    <div class="form-group">
                       
                        <input type="radio" name="respuestacorrecta" id="respuesta1">
                        <label for="respuesta1">
                            Respuesta 1:
                            <input type="text" name="respuestaO1" id="respuestaO1">
                        </label>

                    </div>

                    <div class="form-group">
                       
                        <input type="radio" name="respuestacorrecta" id="respuesta2">
                        <label for="respuesta2">
                            Respuesta 2:
                            <input type="text" name="respuestaO2" id="respuestaO2">
                        </label>

                    </div>

                    <div class="form-group">
                       
                        <input type="radio" name="respuestacorrecta" id="respuesta3">
                        <label for="respuesta3">
                            Respuesta 3:
                            <input type="text" name="respuestaO3" id="respuestaO3">
                        </label>

                    </div>

                    <div class="form-group">
                       
                        <input type="radio" name="respuestacorrecta" id="respuesta4">
                        <label for="respuesta4">
                            Respuesta 4:
                            <input type="text" name="respuestaO4" id="respuestaO4">
                        </label>

                    </div>

                    

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Añadir película
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection