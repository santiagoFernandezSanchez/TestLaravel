

@extends('layouts.app')
@section('content')

<h1>TEMA</h1>

@foreach (Auth::user()->materias->temas as $tema)

<p>Tema {{ $tema->numero }}: {{ $tema->nombre }} </p>



<form action="{{route('tema.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="numero">Tema numero</label>
        <input type="text" name="numero" id="numero" class="form-control" value="{{old('numero')}}">
    </div>

    <div class="form-group">
        <label for="nombre">Tema nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
    </div>

    <input type="hidden" name="materia_id" id="materia_id" value="{{ Auth::user()->materias->id }}">



    <button type="submit" class="btn btn-primary">Añadir tema</button>
</form>

@endforeach
@endsection
