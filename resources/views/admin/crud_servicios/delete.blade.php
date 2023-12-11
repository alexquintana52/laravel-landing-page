<?php
/**
 * @var \iluminate\Support\Collection $errors
 */
/**
 * @var Blog $blogPost
 */
use app\model\Servicios;
?>

@extends('layout.main')

@section('title', $servicio->nombre)

@section('content')

    <div class="container my-5">
        <h1 class="mb-5 text-center">{{ $servicio->nombre }}</h1>
        <div class="d-flex justify-content-between">
            <p>{{ $servicio->descripcion }}</p>
        </div>
        <hr>
        <form action="{{ url('admin/servicios/' . $servicio->servicio_id.'/borrar') }}" method="POST">
            @csrf
            <button type="submit" class="d-inline-block btn-ennoia-delete mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Eliminar</button>
        </form>
    </div>

@endsection
