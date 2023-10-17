@extends('layout.main')

@section('title', $blogPost->titulo)

@section('contenido')
<div class="row">
    <div class="col-6">
        <h1>{{$blogPost->titulo }}</h1>
        <p>{{$blogPost->categoria}}</p>
        <p>{{$blogPost->noticia }}</p>
        <p>{{$blogPost->fecha}}</p>
    </div>
    <div class="col-4">
        @if ($blogPost->img !== null)
            <img src="{{asset('storage/'.$blogPost->img) }}" alt="{{$blogPost->descripcion_img  }}">
        @else
            <img src="{{asset('img/generica.jpg')}}" alt="">
        @endif
    </div>

</div>

@endsection
