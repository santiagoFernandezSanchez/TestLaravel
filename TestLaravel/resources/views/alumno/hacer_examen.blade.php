@extends('layout.app')
@section('content')




<div class="container">

    <div class="row">
        <div class="col">

            <h1>Examen tipo test</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <h2>{{ Auth::user()->materias->nombre }}</h2>
    </div>
</div>

@endsection
