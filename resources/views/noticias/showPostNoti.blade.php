@extends('layout.main')

@section('title', $noticiasPost->titulo)

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center flex-column align-items-center">
            <div class="col-12 col-md-9 col-lg-6">
                @if ($noticiasPost->img !== null)
                    <img src="{{ asset('storage/' . $noticiasPost->img) }}" class="img-fluid" alt="{{ $noticiasPost->descripcion_img }}">
                @else
                    <img src="{{ asset('img/generica.jpg') }}" class="img-fluid" alt="">
                @endif
            </div>
            <div class="col-12 col-md-9 col-lg-6">
                <h1 class="h2 my-5">{{ $noticiasPost->titulo }}</h1>
                <div class="row gy-2 text-ennoia">
                    <div class="col-12 col-md-6">
                        <p>{{ $noticiasPost->categoria_noticias->nombre }}</p>
                    </div>
                    <div class="col-12 col-md-6 text-start text-md-end">
                        <p>Publicado el {{ $noticiasPost->fecha }}</p>
                    </div>
                </div>
                <hr>
                <p>{{ $noticiasPost->noticia }}</p>
            </div>
        </div>
    </div>


@endsection
