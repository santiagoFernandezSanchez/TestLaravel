@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h1>Alumnos inscritos en esta asignatura</h1>
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

                    @foreach ($listado as $inscrito)
                    <tr>
                        <th scope="row">{{$inscrito->id}}</th>
                        <td>{{$inscrito->name}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-3"></div>
    </div>



    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h1>Añadir alumno</h1>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-3"></div>

        <div class="col">

            <form action="{{route('alumno.update')}}" method="post">
                @csrf
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($listado2 as $noInscrito)
                        <tr>
                            <th scope="row">{{$noInscrito->id}}</th>
                            <td>{{$noInscrito->name}}</td>
                            <td><input type="checkbox" value="{{$noInscrito->id}}"></td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>

                <button type="submit" class="btn btn-primary mt-4">Añadir alumno</button>

            </form>
        </div>
        <div class="col-3"></div>
    </div>



</div>
<div class="col-3"></div>
</div>
</div>


@endsection