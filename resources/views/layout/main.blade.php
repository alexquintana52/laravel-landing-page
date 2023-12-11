<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <div class="collapse navbar-collapse text-center justify-content-center align-items-center pb-3 pb-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav pt-4 py-lg-0 mb-lg-0 mx-auto ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains text-white" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains text-white" href="{{ url('/nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains text-white" href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains mb-2 mb-lg-0 text-white" href="{{ url('/noticias') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains mb-2 mb-lg-0 text-white" href="{{ url('/servicios') }}">Servicios</a>
                    </li>
                    @auth

                    <li class="nav-item">
                        <a class="nav-link ff-jetbrains mb-2 mb-lg-0 text-white" href="{{ url('/mi-perfil') }}">Mi perfil</a>
                    </li>
                    @endauth

                    @auth
                        @if (auth()->user()->rol == 'admin')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ff-jetbrains text-white" href="#" role="button" data-bs-toggle="dropdown" >
                                Administración
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item ff-jetbrains" href="{{ url('/admin/blog')}}">Admin Blog</a></li>
                                <li><a class="dropdown-item ff-jetbrains" href="{{ url('/admin/noticias')}}">Admin Noticias</a></li>
                                <li><a class="dropdown-item ff-jetbrains" href="{{ url('/admin/servicios')}}">Admin Servicios</a></li>
                                <li><a class="dropdown-item ff-jetbrains" href="{{ url('/admin/usuarios')}}">Admin Usuarios</a></li>
                                <li><a class="dropdown-item ff-jetbrains" href="{{ url('/admin/estadisticas')}}">Estadisticas</a></li>
                            </ul>
                        </li>
                        @endif
                    @endauth
                </ul>
                @auth
                    <div class="nav-item">
                        <form action="{{ url('/cerrar-sesion')}}" method="POST">
                            @csrf
                            <button class="btn btn-ennoia-outline me-0 me-lg-2">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                @else
                    <div>
                        <a class="btn-ennoia-outline me-0 me-lg-2" href="{{ url('/registrarse')}}">
                        Registrarse
                        </a>
                    </div>
                    <div>
                        <a class="btn-ennoia-outline me-0 me-lg-2" href="{{ url('/iniciar-sesion')}}">
                        Iniciar Sesión
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <main>
        @if (\Session::has('status.message'))
            <div class="container">
                <div class="alert alert-dismissible fade show mensajes" role="alert">
                    {!! \Session::get('status.message') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
