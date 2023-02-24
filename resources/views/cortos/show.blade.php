@extends('plantilla')

@section('titulo','Detalle de corto')

@section('contenido')

@isset($corto)
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">{{$corto->titulo}}</h1>
        <h5 class="card-title">{{$corto->director->nombre}} {{$corto->director->apellidos}}</h5>
        <p class="card-text">{{$corto->usuario->nombre}}</p>
        <p class="card-text">{{$corto->sinopsis}}</p>
        <a href="{{route('cortos.index')}}" class="btn text-primary">Volver</a>
    </div>
</div>
@else
<div class="alert alert-danger">El corto no existe </div>
<a href="{{route('cortos.index')}}" class="btn text-primary">Volver</a>
@endisset

@endsection