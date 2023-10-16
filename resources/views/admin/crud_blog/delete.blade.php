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

@section('contenido')
    <h1>{{$blogPost->titulo }}</h1>
    <p>{{$blogPost->categoria}}</p>
    <p>{{$blogPost->noticia }}</p>
    <p>{{$blogPost->fecha}}</p>
    <form action="{{ url('admin/blog/'. $blogPost->id .'/borrar' )}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection
