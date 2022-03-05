@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-3"></div>
  <div class="col">
    <h3 class="display-3 mt-4 mb-5">Administrar niveles</h3>
    <div>
      <a href="{{ route('niveles.create')}}" class="btn btn-primary mb-3">Añadir nivel</a>
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
          <td>Actualizado por última vez</td>
          <td colspan=2>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach($nivels as $nivel)
        <tr>
          <td class="text-center">{{$nivel->id}}</td>
          <td>{{$nivel->nombre}} </td>
          <td>{{$nivel->updated_at}}</td>
          <td>
            <a href="{{ route('niveles.edit', $nivel)}}" class="btn btn-primary">Editar</a>
          </td>
          <td>

            <form action="{{ route('niveles.destroy', $nivel->id)}}" method="post">
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