<?php
?>
@extends('layout.main')

@section('title', ' mi perfil')

@section('content')


<section class="container my-5">
    <div class="col-md-4">
        <h1 >
            Mi perfil
        </h1>
    </div>
    <div class="my-4 col-md-4">
        <h2>
            Datos
        </h2>
        <p>
            {{ $user->name }}
        </p>
        <p>
            {{ $user->email }}
        </p>
    </div>

    <div class="my-4 col-md-4">
        <h2>
            Suscrición
        </h2>
        @if (isset($user->servicosPorUsuario->nombre))
            <p>
                {{ isset($user->servicosPorUsuario->nombre) ? $user->servicosPorUsuario->nombre : "" }}
            </p>
            <p>
                {{ isset($user->servicosPorUsuario->descripcion) ? $user->servicosPorUsuario->descripcion : "" }}
            </p>
            <img src="{{ asset('storage/' . $user->servicosPorUsuario->img) }}" alt="{{ $user->servicosPorUsuario->descripcion_img}}" class="img-fluid rounded">

            <a href="/servicios" class="d-inline-block btn-ennoia my-4 text-center" >
                Modificar
            </a>
        @else
            <p class="mb-2 text-danger">
                No tienes suscripción
            </p>
            <a href="/servicios" class="d-inline-block btn-ennoia my-4 text-center" >
                Suscribirme
            </a>
        @endif

    </div>


</section>

@endsection
