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
                <label for="preguntas">Número de preguntas</label>
                <input type="text" name="numero_preguntas" id="preguntas" class="form-control" value="{{$pregunta->numero_preguntas}}">
            </div>

            <div class="form-group mt-4">
                <label for="f_inicio">Fecha Inicio</label>
                <input type="datetime-local" name="fecha_inicio" id="f_inicio" class="form-control" value="{{$pregunta->fecha_inicio}}">
            </div>

            <div class="form-group mt-4">
                <label for="f_final">Fecha Final</label>
                <input type="datetime-local" name="materia_id" id="materia" class="form-control" value="{{$pregunta->fecha_final}}">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Actualizar</button>
        </form>
    </div>
    <div class="col-3"></div>
</div>

</div>
</div>

@endsection