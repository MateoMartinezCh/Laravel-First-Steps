@extends('plantilla')

@section('titulo','Crear Director')

@section('contenido')


<main class="text-center container-fluid">
    <form action="{{route('directores.store')}}" method="post" class="row form-signin w-50 m-auto">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Por favor, Regístrate</h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingNombre" placeholder="nombre">
            <label for="floatingNombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingApellidos" placeholder="Apellidos">
            <label for="floatingApellidos">Apellidos</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
</main>

@endsection