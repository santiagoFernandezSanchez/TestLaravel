@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-3"></div>
  <div class="col">
    <h3 class="display-3 mt-4 mb-5">Administrar temas</h3>
    <div>
      <a href="{{ route('temas.create')}}" class="btn btn-primary mb-3">Añadir tema</a>
    </div>
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <td>Materia</td>
          <td>Número</td>
          <td>Nombre</td>
          <td>Actualizado por última vez</td>
          <td colspan=2>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach($temas as $tema)
        <tr>
          <td class="text-center">{{$tema->materia_id}}</td>
          <td class="text-center">{{$tema->numero}} </td>
          <td>{{$tema->nombre}}</td>
          <td>{{$tema->updated_at}}</td>
          <td>
            <a href="{{ route('temas.edit',$tema->id)}}" class="btn btn-primary">Editar</a>
          </td>
          <td>

            <form action="{{ route('temas.destroy', $tema->id)}}" method="post">
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