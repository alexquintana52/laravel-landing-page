@extends('layout.main')

@section('title', 'Ennoia | Iniciar Sesión')

@section('content')

<section class="container py-5 login-section">
  <div class="row text-center d-flex flex-column align-items-center justify-content-center">
    <img src="{{ url('img/logo/logo-ennoia.svg') }}" class="logo-ennoia" />
    <h3 class="fs-5 my-4">Iniciar Sesión en Ennoia</h3>
    <form class="form-ennoia d-flex flex-column align-items-center justify-content-center">
      <input type="email" class="form-control input-ennoia" placeholder="Correo Electrónico" />
      <input type="password" class="form-control input-ennoia" placeholder="Contraseña" />
      <a href="{{ route('auth.login') }}" class="input-btn-ennoia fw-bold form-control">Iniciar Sesión</a>
    </form>
    <p class="mt-5 fs-6">¿Aún no tienes una cuenta? <a href="{{ route('auth.register') }}" class="text-ennoia link-color">Registrarse</a></p>
  </div>
</section>

@endsection