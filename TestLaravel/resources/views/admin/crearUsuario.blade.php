@extends('layouts.app')
@section('content')
<div class="row mt-2">
    <div class="col d-flex justify-content-center">
        <h2>Crear nuevo usuario</h2>
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

        <form action="{{route('usuarios.store')}}" method="post">
            @csrf
            <div class="form-group mt-5">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
            </div>

            <div class="form-group mt-5">
                <label for="rol">Rol</label>
                <input type="text" name="rol" id="rol" class="form-control" value="{{old('rol')}}">
            </div>

            <div class="form-group mt-5">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
            </div>

            <div class="form-group mt-5">
                <label for="password">Contraseña</label>
                <input type="text" name="password" id="password" class="form-control" value="{{old('password')}}">
            </div>

            <div class="form-group mt-5">
                <label for="materia_id">Materia ID</label>
                <input type="text" name="materia_id" id="materia_id" class="form-control" value="{{old('materia_id')}}">
            </div>

            <button type="submit" class="btn btn-primary mt-5">Crear usuario</button>

        </form>
    </div>

    <div class="col-3"></div>
</div>

@endsection