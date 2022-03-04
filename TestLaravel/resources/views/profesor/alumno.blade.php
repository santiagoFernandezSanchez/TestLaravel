@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h1>Añadir alumno</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach (Auth::user()->materias as $alumnos)
                    <tr>
                        <th scope="row">{{$alumnos->user_id}}</th>
                        <td>{{$tema->nombre}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-3"></div>
    </div>


    <div class="row mt-4">

        <div class="col-3"></div>
        <div class="col">

            <form action="{{route('alumno.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="numero"><h5>N</h5></label>
                    <input type="text" name="numero" id="numero" class="form-control" value="{{old('numero')}}">
                </div>

                <button type="submit" class="btn btn-primary mt-4">Añadir alumno</button>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>


@endsection