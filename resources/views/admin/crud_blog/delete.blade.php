<?php
/**
 * @var \iluminate\Support\Collection $errors
 */
/**
 * @var Blog $blogPost
 */
use app\model\Blog;
?>
@extends('layout.main')

@section('title', $blogPost->titulo)

@section('content')

    <div class="container my-5">
        <h1 class="mb-5 text-center">{{ $blogPost->titulo }}</h1>
        <div class="d-flex justify-content-between">
            <p>{{ $blogPost->categoria_blog->nombre }}</p>
            <p>{{ $blogPost->fecha }}</p>
        </div>
        <hr>
        <p>{{ $blogPost->noticia }}</p>
        <form action="{{ url('admin/blog/' . $blogPost->id . '/borrar') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Eliminar</button>
        </form>
    </div>

@endsection
