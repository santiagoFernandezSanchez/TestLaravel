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
        <form action="{{route('usuarios.update', $usuario)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group mt-4">
                <label for="nombre">Nombre</label>
                <input type="text" name="name" id="nombre" class="form-control" value="{{$usuario->name}}">
            </div>
            <div class="form-group mt-4">
                <label for="rol">Rol</label>
                <input type="text" name="rol" id="rol" class="form-control" value="{{$usuario->rol}}">
            </div>

            <div class="form-group mt-4">
                <label for="email">Correo electrónico</label>
                <input type="text" name="email" id="email" class="form-control" value="{{$usuario->email}}">
            </div>

            <div class="form-group mt-4">
                <label for="materia">Materia ID</label>
                <input type="text" name="materia_id" id="materia" class="form-control" value="{{$usuario->materia_id}}">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Actualizar</button>
        </form>
    </div>
    <div class="col-3"></div>
</div>

</div>
</div>

@endsection