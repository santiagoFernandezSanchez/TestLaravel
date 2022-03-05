@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2"></div>
  <div class="col">
    <h3 class="display-3 mt-4 mb-5">Administrar exámenes</h3>
    <div>
      <a href="{{ route('examenes.create')}}" class="btn btn-primary mb-3">Añadir examen</a>
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
          <td>Nivel</td>
          <td>Numero de preguntas</td>
          <td>Fecha Inicio</td>
          <td>Fecha Fin</td>
          <td>Tema ID</td>
          <td>Actualizado por última vez</td>
          <td colspan=2>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach($examens as $examen)
        <tr>
          <td class="text-center">{{$examen->id}}</td>
          <td>{{$examen->niveles}} </td>
          <td>{{$examen->numero_preguntas}}</td>
          <td>{{$examen->fecha_inicio}}</td>
          <td>{{$examen->fecha_final}}</td>
          <td class="text-center">{{$examen->tema_id}}</td>
          <td>{{$examen->updated_at}}</td>
          <td>
            <a href="{{ route('examenes.edit',$examen->id)}}" class="btn btn-primary">Editar</a>
          </td>
          <td>

            <form action="{{ route('examenes.destroy', $examen->id)}}" method="post">
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