@extends('plantilla')

@section('titulo','Listado de cortos')

@section('contenido')
<div class="row">

    @forelse($cortos as $corto )
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h1 class="card-title">{{$corto->titulo}}</h1>
            <h5 class="card-title">{{$corto->director->nombre}} {{$corto->director->apellidos}}</h5>
            <a href="{{route('cortos.show',$corto->id)}}" class="btn btn-primary">Detalles</a>
        </div>
    </div>
    @empty
    <div class="alert alert-danger">No hay ningún Corto</div>
    @endforelse
</div>


@endsection