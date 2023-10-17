@extends('layout.main')

@section('title', $blogPost->titulo)

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center flex-column align-items-center">
            <div class="col-12 col-md-9 col-lg-6">
                @if ($blogPost->img !== null)
                    <img src="{{ asset('storage/' . $blogPost->img) }}" class="img-fluid"
                        alt="{{ $blogPost->descripcion_img }}">
                @else
                    <img src="{{ asset('img/generica.jpg') }}" class="img-fluid" alt="">
                @endif
            </div>
            <div class="col-12 col-md-9 col-lg-6">
                <h1 class="h2 my-5">{{ $blogPost->titulo }}</h1>
                <div class="row gy-2 text-ennoia">
                    <div class="col-12 col-md-6">
                        <p>{{ $blogPost->categoria_blog->nombre }}</p>
                    </div>
                    <div class="col-12 col-md-6 text-start text-md-end">
                        <p>Publicado el {{ $blogPost->fecha }}</p>
                    </div>
                </div>
                <hr>
                <p>{{ $blogPost->noticia }}</p>
            </div>
        </div>
    </div>


@endsection
