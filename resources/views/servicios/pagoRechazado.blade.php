<?php

?>
@extends('layout.main')

@section('title', 'Ennoia | pagoRealizado')

@section('content')

<section class="container py-5 login-section">
    <h1 class="h4 py-2 ">Estado de pago</h1>
    <p class="h4 pb-2">
        <b class="text-success">{{$user->name}}</b>, Su pedido fue Rechazado.
    </p>
</section>

@endsection
