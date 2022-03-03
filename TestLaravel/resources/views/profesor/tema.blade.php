

@extends('layouts.app')
@section('content')

<h1>TEMA</h1>

                    @foreach ( $temas = Auth::user()->materias->temas as $tema )

                        <p> Tema {{ $tema->numero }}: {{ $tema->nombre }} </p>

                    @endforeach
@endsection