<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('/img/logo/ennoia-right-white.svg') }}" width="120" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end align-items-center pb-3 pb-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav pt-4 py-lg-0 mb-lg-0 ms-lg-5 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains text-white" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains text-white" href="{{ url('/nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains text-white" href="{{ url('/blog') }}">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @if (\Session::has('status.message'))
            <div class="container">
                <div class="alert alert-success">
                    {!! \Session::get('status.message') !!}
                </div>
            </div>

        @endif

        @yield('content')
    </main>

    <footer class="py-4 text-center">
        <div class="container">
            <p class="text-secondary">© 2023 Ennoia. Todos los Derechos Reservados</p>
        </div>
    </footer>

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
