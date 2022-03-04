@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h1>Crear examen</h1>
        </div>

        @if(session('examen_creado'))

                <p class="alert alert-success"> {{ session('examen_creado') }}</p>

            @endif
    </div>

    <div class="row mt-4">

        <div class="col-3"></div>
        <div class="col">
            <form action=" {{ route('examen.store') }}" method="post">
                @csrf
                <div class="form-group">
                    
                    <label for = "niveles">Seleccione un nivel:</label>
                    <select class = "form-control" id="niveles" name="niveles">

                        <option value ="Básico">Básico</option>
                        <option value ="Intermedio">Intermedio</option>
                        <option value ="Avanzado">Avanzado</option>

                    </select>

                </div>

                <div class="form-group mt-4">

                    <label for="tema_id">Seleccione un tema:</label>
                    <select class = "form-control" id="tema_id" name="tema_id">

                        @foreach($temas as $tema)
                        
                            <option value = "{{ $tema->id }}">Tema {{ $tema->numero}}: {{ $tema->nombre }}</option>
                        
                        @endforeach

                    </select>

                </div>

                <div class="form-group mt-4">

                    <label for="numero_preguntas">Número de preguntas:</label>
                    <input type="number" name="numero_preguntas" id="numero_preguntas" min="10" class="form-control" value="">

                </div>

                <div class="form-group mt-4">

                    <label for = "fecha_inicio">Fecha inicio del examen:</label>
                    <input type = "datetime-local" name ="fecha_inicio" id = "fecha_inicio">

                </div>

                <div class="form-group mt-4">

                    <label for = "fecha_final">Fecha fin del examen:</label>
                    <input type = "datetime-local" name ="fecha_final" id = "fecha_final">

                </div>

                <button type="submit" class="btn btn-primary mt-4">Crear examen</button>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection