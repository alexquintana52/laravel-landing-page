@extends('layout.main')

@section('title', 'Ennoia | Registrarse')

@section('content')

<section class="container py-5 register-section">
  <div class="row text-center d-flex flex-column align-items-center justify-content-center">
    <img src="{{ url('img/logo/logo-ennoia.svg') }}" class="logo-ennoia" />
    <h3 class="fs-5 my-4">Registrarse en Ennoia</h3>
    <form class="form-ennoia d-flex flex-column align-items-center justify-content-center">
      <input type="text" class="form-control input-ennoia" placeholder="Nombre y Apellido" />
      <input type="email" class="form-control input-ennoia" placeholder="Correo Electrónico" />
      <input type="password" class="form-control input-ennoia" placeholder="Contraseña" />
      <a href="{{ route('auth.register') }}" class="input-btn-ennoia fw-bold form-control">Registrarse</a>
    </form>
    <p class="mt-5">¿Ya tienes una cuenta? <a href="{{ route('auth.login') }}" class="text-ennoia link-color">Iniciar Sesión</a></p>
  </div>
</section>

@endsection