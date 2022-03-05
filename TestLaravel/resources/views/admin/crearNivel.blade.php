@extends('layouts.app')
@section('content')
<div class="row mt-2">
    <div class="col d-flex justify-content-center">
        <h2>Crear nuevo nivel</h2>
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

        <form action="{{route('niveles.store')}}" method="post">
            @csrf
            <div class="form-group mt-5">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
            </div>

            <button type="submit" class="btn btn-primary mt-5">Crear nivel</button>

        </form>
    </div>

    <div class="col-4"></div>
</div>

@endsection