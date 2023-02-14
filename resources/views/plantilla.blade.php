<html>

<head>
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <header>
        <h1>Festival de Cortos</h1>
    </header>
    <nav>
        @include('partials.nav')
    </nav>
    @yield('contenido')
</body>

</html>