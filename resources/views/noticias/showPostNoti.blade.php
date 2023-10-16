@extends('layout.main')

@section('title', $noticiasPost->titulo)

@section('contenido')
    <img src="{{$noticiasPost->img }}" alt="{{$noticiasPost->descripcion_img }}">
    <h1>{{$noticiasPost->titulo }}</h1>
    <p>{{$noticiasPost->noticia }}</p>
    <p>{{$noticiasPost->fecha}}</p>
    <p>{{$noticiasPost->funcionalidades }}</p>
    <p>{{$noticiasPost->Fecha}}</p>
@endsection
