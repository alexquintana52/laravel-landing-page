
@extends('layout.main')

@section('title', 'Ennoia | pagoRealizado')

@section('content')

<section class="container py-5 login-section">
    <h1 class="h4 py-2 ">Pago finalizado</h1>
    <p class="h4 pb-2">
        <b class="text-success">{{$user->name}}</b>, tu suscripción al <b class="text-success">{{ isset($user->servicosPorUsuario->nombre) ? $user->servicosPorUsuario->nombre : "" }}</b> fue realizada, verifica estos cambios en tu perfil.
    </p>
    <div class="col-12 col-md-3" >
        <a href="{{ url('/mi-perfil') }}" class="btn btn-primary mt-5 py-2 px-5 mx-auto d-flex justify-content-center">
            Ver perfil
        </a>
    </div>

</section>

@endsection
