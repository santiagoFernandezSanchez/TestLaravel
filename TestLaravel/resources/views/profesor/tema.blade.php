@extends('layouts.app')
@section('content')


<div class="container">

    <!-- LISTA DE TEMAS -->
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col">

            @if(session('tema_creado'))

                <p class="alert alert-success">{{ session('tema_creado') }}</p>

            @endif

            <h1>Lista de temas</h1>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tema</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($temas as $tema)
                    <tr>
                        <td scope="row">{{$tema->numero}}</td>
                        <td>{{$tema->nombre}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-3"></div>
    </div>

    <!-- AÑADIR TEMA -->
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col">
            <h1>Añadir tema</h1>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row mt-4">

        <div class="col-3"></div>
        <div class="col">

            <form action="{{route('tema.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="numero"><h5>Numero del tema</h5></label>
                    <input type="text" name="numero" id="numero" class="form-control" value="{{old('numero')}}">
                    @if($errors->has('numero')) 
                    
                        <p class="alert alert-danger">El número de temas es obligatorio y solo se aceptan números</p>  
                        
                    @endif
                </div>

                <div class="form-group mt-4">
                    <label for="nombre"><h5>Nombre del tema</h5></label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
                    @if($errors->has('nombre')) 
                        
                        <p class="alert alert-danger">El nombre del tema es obligatorio y solo se aceptan letras y espacio</p>
                        
                    @endif
                </div>

                <button type="submit" class="btn btn-primary mt-4">Añadir tema</button>

            </form>

        </div>
        <div class="col-3"></div>
    </div>

</div>

@endsection
