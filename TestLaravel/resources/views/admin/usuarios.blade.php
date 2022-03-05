@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2"></div>
  <div class="col">
    <h3 class="display-3 mt-4 mb-5">Administrar usuarios</h3>
    <div>
      <a href="{{ route('usuarios.create')}}" class="btn btn-primary mb-3">Añadir usuario</a>
    </div>
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Rol</td>
          <td>Email</td>
          <td>ID Materia</td>
          <td>Actualizado última vez</td>
          <td colspan=2>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $usuario)
        <tr>
          <td>{{$usuario->id}}</td>
          <td>{{$usuario->name}} </td>
          <td>{{$usuario->rol}}</td>
          <td>{{$usuario->email}}</td>
          <td>{{$usuario->materia_id}}</td>
          <td>{{$usuario->updated_at}}</td>
          <td>
            <a href="{{ route('usuarios.edit',$usuario->id)}}" class="btn btn-primary">Editar</a>
          </td>
          <td>
            <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Borrar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="col-2"></div>
</div>
    @endsection