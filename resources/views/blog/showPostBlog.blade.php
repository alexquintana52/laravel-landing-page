@extends('layout.main')

@section('title', $blogPost->titulo)

@section('contenido')
    <img src="{{$blogPost->img }}" alt="{{$blogPost->descripcion_img }}">
    <h1>{{$blogPost->titulo }}</h1>
    <p>{{$blogPost->categoria}}</p>
    <p>{{$blogPost->noticia }}</p>
    <p>{{$blogPost->fecha}}</p>
@endsection
