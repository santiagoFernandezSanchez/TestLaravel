@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-3"></div>
    <div class="col">
        <h1 class="display-3">Editar</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
    </div>
    @endif
</div>

<div class="row">
    <div class="col-3"></div>
    <div class="col">
        <form action="{{route('preguntas.update', $pregunta)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group mt-4">
                <label for="nivel">Nivel</label>
                <input type="text" name="nivel" id="nivel" class="form-control" value="{{$pregunta->nivel}}">
            </div>
            <div class="form-group mt-4">
                <label for="enunciado">Enunciado</label>
                <input type="text" name="enunciado" id="enunciado" class="form-control" value="{{$pregunta->enunciado}}">
            </div>

            <div class="form-group mt-4">
                <label for="respuesta1">Respuesta 1</label>
                <input type="text" name="respuesta1" id="respuesta1" class="form-control" value="{{$pregunta->respuesta1}}">
            </div>

            <div class="form-group mt-4">
                <label for="respuesta2">Respuesta 2</label>
                <input type="text" name="respuesta2" id="respuesta2" class="form-control" value="{{$pregunta->respuesta2}}">
            </div>

            <div class="form-group mt-4">
                <label for="respuesta3">Respuesta 3</label>
                <input type="text" name="respuesta3" id="respuesta3" class="form-control" value="{{$pregunta->respuesta3}}">
            </div>

            <div class="form-group mt-4">
                <label for="respuesta4">Respuesta 4</label>
                <input type="text" name="respuesta4" id="respuesta4" class="form-control" value="{{$pregunta->respuesta4}}">
            </div>

            <div class="form-group mt-4">
                <label for="correcta">Correcta</label>
                <input type="text" name="correcta" id="correcta" class="form-control" value="{{$pregunta->correcta}}">
            </div>

            <div class="form-group mt-4">
                <label for="tema_id">Tema ID</label>
                <input type="text" name="tema_id" id="tema_id" class="form-control" value="{{$pregunta->tema_id}}">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Actualizar</button>
        </form>
    </div>
    <div class="col-3"></div>
</div>

</div>
</div>

@endsection