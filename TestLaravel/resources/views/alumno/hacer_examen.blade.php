@extends('layouts.app')
@section('content')




<div class="container">

    <div class="row">
        <div class="col">

            <h1>Examen tipo test</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <h2> Tema {{ $tema->numero }}: {{ $tema->nombre }}</h2>
    </div>
</div>

<div class="row">

    <form action="{{ route('corregir') }}" method="post">

        @csrf

    @foreach ($examenPreguntas as $pregunta)

    <p>{{ $pregunta->enunciado }}</p>

    <div class="row">
    <div class="col">
        <input type="radio" name="{{ $pregunta->id }}" id="respuesta1" value="{{ $pregunta->respuesta1 }}">
        <label for="respuesta1">{{ $pregunta->respuesta1 }}</label>
    </div>
    <div class="col"><input type="radio" name="{{ $pregunta->id }}" id="respuesta2" value="{{ $pregunta->respuesta2 }}">
        <label for="respuesta2">{{ $pregunta->respuesta2 }}</label></div>
    <div class="col">
        <input type="radio" name="{{ $pregunta->id }}" id="respuesta3" value="{{ $pregunta->respuesta3 }}">
        <label for="respuesta3">{{ $pregunta->respuesta3 }}</label>
    </div>
    <div class="col"><input type="radio" name="{{ $pregunta->id }}" id="respuesta4" value="{{ $pregunta->respuesta4 }}">
        <label for="respuesta4">{{ $pregunta->respuesta4 }}</label>
    </div>
</div>

<input type="hidden" name="correcta{{ $pregunta->id }}" value="{{ $pregunta->correcta }}">

    @endforeach

    <input type="hidden" name="idexamen" value="{{ $id }}">

    <button type="submit">Terminar examen</button>

</form>
</div>


@endsection
