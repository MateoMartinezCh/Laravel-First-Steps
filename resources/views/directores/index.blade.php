@extends('plantilla')

@section('titulo','Listado de directores')

@section('contenido')
<div class="row">

    @forelse($directores as $director )
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h1 class="card-title">{{$director->nombre}}</h1>
            <h5 class="card-title">{{$director->apellidos}}</h5>
            @forelse($director->cortos as $corto )
            <h5 class="card-title">{{$corto->titulo}}</h5>
            @empty
            <div class="alert alert-danger">No hay ningún corto</div>
            @endforelse
        </div>
    </div>
    @empty
    <div class="alert alert-danger">No hay ningún director</div>
    @endforelse
</div>


@endsection