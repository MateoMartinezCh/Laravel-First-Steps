<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">Festicortos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ setActive('welcome') }}" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('cortos.*') }}" href="{{route('cortos.index')}}">Listado de cortos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('cortos.create') }}" href="{{route('cortos.create')}}">Crear Corto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('directores.index') }}" href="{{route('directores.index')}}">Directores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('directores.create') }}" href="{{route('directores.create')}}">Crear Director</a>
                </li>
            </ul>
        </div>
    </div>
</nav>