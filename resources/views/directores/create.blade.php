@extends('plantilla')

@section('titulo','Crear Director')

@section('contenido')


<main class="text-center container-fluid">
    <form action="{{route('directores.store')}}" method="post" class="row form-signin w-50 m-auto">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Crea un Director
        </h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" value="{{old('nombre')}}">
            <label for="nombre">Nombre</label>
            @if ($errors->has('nombre'))
            <div class="alert alert-danger">
                {{ $errors->first('nombre') }}
            </div>
            @endif
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" value="{{old('apellidos')}}">
            <label for="apellidos">Apellidos</label>
            @if ($errors->has('apellidos'))
            <div class="alert alert-danger">
                {{ $errors->first('apellidos') }}
            </div>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
</main>

@endsection