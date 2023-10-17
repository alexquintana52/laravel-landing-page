


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('/img/logo/ennoia-right-white.svg') }}" width="120" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <ul class="navbar-nav pt-4 py-lg-0 mb-lg-0 mx-auto ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains text-white" href="{{ url('/')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains text-white" href="{{ url('/blog')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains mb-2 mb-lg-0 text-white" href="{{ url('/noticias')}}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains mb-2 mb-lg-0 text-white" href="{{ url('/nosotros')}}">Nosotros</a>
                    </li>


                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
                                Administración
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/admin/blog')}}">Admin Blog</a></li>
                                <li><a class="dropdown-item" href="{{ url('/admin/noticias')}}">Admin Noticias</a></li>
                            </ul>
                        </li>
                    @endauth



                </ul>
                    @auth
                        <div class="nav-item">
                            <form action="{{ url('/cerrar-sesion')}}" method="POST">
                                @csrf
                                <button class="btn-ennoia-outline me-0 me-lg-2">
                                Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    @else

                    <div>
                        <a class="btn-ennoia-outline me-0 me-lg-2" href="{{ url('/iniciar-sesion')}}">
                        Iniciar Sesión
                        </a>
                        <a class="btn-ennoia-outline ms-0 ms-lg-2 mt-3 mt-lg-0" href="{{ url('/')}}">
                            Registrarse
                        </a>
                    </div>
                @endauth


            </div>


        </div>
    </nav>

    <main class="container-fluid mb-3">
        @if (\Session::has('status.message'))
            <div class="container">
                <div class="alert alert-success">
                    {!! \Session::get('status.message') !!}
                </div>
            </div>

        @endif

        @yield('contenido')
    </main>

    <footer class="py-4 text-center">
        <div class="container">
            <p class="text-secondary">© 2023 Ennoia. Todos los Derechos Reservados</p>
        </div>
    </footer>

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
