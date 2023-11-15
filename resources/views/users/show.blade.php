<?php
?>
@extends('layout.main')

@section('title', ' mi perfil')

@section('content')

<section class="container my-5 d-flex justify-content-between">

    <div class="row my-4 col-md-3">
        <p>
            {{ $user->name }}
        </p>
        <p>
            {{ $user->email }}
        </p>
    </div>

    <div class="row my-4 col-md-3">
        <p>
            {{ isset($user->servicosPorUsuario->nombre) ? $user->servicosPorUsuario->nombre : "" }}
        </p>
        <p>
            {{ isset($user->servicosPorUsuario->descripcion) ? $user->servicosPorUsuario->descripcion : "" }}
        </p>

        <img src="{{ asset('storage/' . $user->servicosPorUsuario->img) }}" alt="{{ $user->servicosPorUsuario->descripcion_img}}" class="img-fluid rounded">

        <a href="" class="d-inline-block btn-ennoia my-4 text-center" >
            Modificar
        </a>
    </div>


</section>

@endsection
