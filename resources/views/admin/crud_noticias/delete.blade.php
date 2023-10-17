<?php
/**
 * @var \iluminate\Support\Collection $errors
 */
/**
 * @var Noticias $noticiasPost
 */
use App\Model\Noticias;
?>
@extends('layout.main')

@section('title', $noticiasPost->titulo)

@section('content')

    <div class="container my-5">
        <h1 class="mb-5 text-center">{{ $noticiasPost->titulo }}</h1>
        <div class="d-flex justify-content-between">
            <p>{{ $noticiasPost->categoria_noticias->nombre }}</p>
            <p>{{ $noticiasPost->fecha }}</p>
        </div>
        <hr>
        <p>{{ $noticiasPost->noticia }}</p>
        <form action="{{ url('admin/noticias/' . $noticiasPost->id . '/borrar') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Eliminar</button>
        </form>
    </div>

@endsection
