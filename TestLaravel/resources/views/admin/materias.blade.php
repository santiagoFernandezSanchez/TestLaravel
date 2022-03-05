@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-3"></div>
  <div class="col">
    <h3 class="display-3 mt-4 mb-5">Administrar materias</h3>
    <div>
      <a href="{{ route('materias.create')}}" class="btn btn-primary mb-3">Añadir materia</a>
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
          <td>ID Nivel</td>
          <td>Actualizado por última vez</td>
          <td colspan=2>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach($materias as $materia)
        <tr>
          <td class="text-center">{{$materia->id}}</td>
          <td>{{$materia->nombre}} </td>
          <td>{{$materia->nivel_id}}</td>
          <td>{{$materia->updated_at}}</td>
          <td>
            <a href="{{ route('materias.edit',$materia->id)}}" class="btn btn-primary">Editar</a>
          </td>
          <td>

            <form action="{{ route('materias.destroy', $materia->id)}}" method="post">
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
  <div class="col-3"></div>
</div>
@endsection