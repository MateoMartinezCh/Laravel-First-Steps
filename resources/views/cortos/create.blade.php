@extends('plantilla')

@section('titulo','Crear Corto')

@section('contenido')


<main class="text-center container-fluid">
    <form action="{{route('cortos.store')}}" method="post" class="row form-signin w-50 m-auto">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Crea un Corto
        </h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo" value="{{old('titulo')}}">
            <label for="titulo">Titulo del Corto</label>
            @if ($errors->has('titulo'))
            <div class="alert alert-danger">
                {{ $errors->first('titulo') }}
            </div>
            @endif
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="director_id">
                <option selected disabled>Elige el director</option>
                @forelse($directores as $director )
                <option value="{{$director->id}} {{ (old('director_id') == $director->id ? 'selected':'') }}">{{$director->nombre}}, {{$director->id}}</option>
                @empty
                <!-- {{ (Input::old('director_id') == $director->id ? 'selected':'') }} -->
                <div class="alert alert-danger">No hay ningún corto</div>
                @endforelse
            </select>
        </div>
        @if ($errors->has('director_id'))
        <div class="alert alert-danger">
            {{ $errors->first('director_id') }}
        </div>
        @endif

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-start w-100">Escribe aquí la sinopsis:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopsis">{{old('sinopsis')}}</textarea>
        </div>
        @if ($errors->has('sinopsis'))
        <div class="alert alert-danger">
            {{ $errors->first('sinopsis') }}
        </div>
        @endif
        <button class="w-100 btn btn-lg btn-primary" type="submit">Nuevo corto</button>
    </form>
</main>

@endsection