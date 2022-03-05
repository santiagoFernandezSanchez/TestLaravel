@extends('layouts.app')
@section('content')
<div class="row mt-2">
    <div class="col d-flex justify-content-center">
        <h2>Crear nuevo tema</h2>
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

    <div class="col-4"></div>

    <div class="col">

        <form action="{{route('temas.store')}}" method="post">
            @csrf
            <div class="form-group mt-5">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
            </div>

            <div class="form-group mt-5">
                <label for="numero">Número</label>
                <input type="text" name="numero" id="numero" class="form-control" value="{{old('numero')}}">
            </div>

            <div class="form-group mt-5">
                <label for="materia_id">Materia ID</label>
                <input type="text" name="materia_id" id="materia_id" class="form-control" value="{{old('materia_id')}}">
            </div>

            <button type="submit" class="btn btn-primary mt-5">Crear tema</button>

        </form>
    </div>

    <div class="col-4"></div>
</div>

@endsection