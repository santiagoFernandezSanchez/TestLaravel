@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-1"></div>
  <div class="col">
    <h3 class="display-3 mt-4 mb-5">Administrar preguntas</h3>
    <div>
      <a href="{{ route('preguntas.create')}}" class="btn btn-primary mb-3">Añadir pregunta</a>
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
          <td>Enunciado</td>
          <td>Respuesta 1</td>
          <td>Respuesta 2</td>
          <td>Respuesta 3</td>
          <td>Respuesta 4</td>
          <td>Correcta</td>
          <td>ID Tema</td>
          <td>Última Actualización</td>
          <td colspan=2>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach($preguntas as $pregunta)
        <tr>
          <td class="text-center">{{$pregunta->id}}</td>
          <td>{{$pregunta->nivel}} </td>
          <td>{{$pregunta->enunciado}}</td>
          <td>{{$pregunta->respuesta1}}</td>
          <td>{{$pregunta->respuesta2}}</td>
          <td>{{$pregunta->respuesta3}}</td>
          <td>{{$pregunta->respuesta4}}</td>
          <td>{{$pregunta->correcta}}</td>
          <td>{{$pregunta->tema_id}}</td>
          <td>{{$pregunta->updated_at}}</td>
          <td>
            <a href="{{ route('preguntas.edit',$pregunta->id)}}" class="btn btn-primary">Editar</a>
          </td>
          <td>

            <form action="{{ route('preguntas.destroy', $pregunta->id)}}" method="post">
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
  <div class="col-1"></div>
</div>
@endsection