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
        <form action="{{route('niveles.update', $nivel)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group mt-4">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$nivel->nombre}}">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Actualizar</button>
        </form>
    </div>
    <div class="col-3"></div>
</div>

</div>
</div>

@endsection