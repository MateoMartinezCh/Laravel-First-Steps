<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <nav>
        @include('partials.nav')
    </nav>
    @yield('contenido')
    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>