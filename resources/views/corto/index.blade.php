@extends('plantilla')

@section('titulo', 'Listado de cortos')

@section('contenido')
<h1>Listado de cortos</h1>
<ul>
    @forelse ($cortos as $corto)
    <li>{{ $corto["titulo"] }} ({{ $corto["autor"] }})</li>
    @empty
    <li>No se encontraron cortos</li>
    @endforelse
</ul>
@endsection