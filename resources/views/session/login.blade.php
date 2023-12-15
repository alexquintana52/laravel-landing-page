@extends('layout.main')

@section('title', 'Ennoia | Iniciar Sesión')

@section('content')

    <section class="bg-ennoia">
        <div class="container py-5 login-section">
            <div class="row text-center d-flex flex-column align-items-center justify-content-center">
                <img src="{{ url('img/logo/logo-ennoia.svg') }}" class="logo-ennoia" />
                <h3 class="fs-5 my-4">Iniciar Sesión en Ennoia</h3>
                <div class="col-12 col-md-6 col-lg-4">
                    <form action="{{ url('/iniciar-sesion') }}" method="POST" class="form-ennoia d-flex flex-column align-items-center justify-content-center">
                        @csrf
                            <label for="email" class="form-label visually-hidden">Email</label>
                            <input type="text" id="email" name="email" class="form-control input-ennoia" value="{{ old('email') }}" placeholder="Correo Electrónico" autocomplete="off">
                            @error('email')
                                <p class="text-ennoia mb-4">
                                    {{ $message }}
                                </p>
                            @enderror
                            <label for="password" class="form-label visually-hidden">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control input-ennoia" placeholder="Contraseña" autocomplete="off">
                            @error('password')
                                <p class="text-ennoia mb-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        <button class="btn-ennoia form-control">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
