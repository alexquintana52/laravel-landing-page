@extends('layout.main')

@section('title', 'Noticias')

@section('contenido')
    <h1>Noticias</h1>

    <?php

    //dd($noticiasPost )
    ?>

    <section class="container mb-5">
    <div class="row gy-4">

        @foreach ($noticiasPost as $posteo)
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('/noticias/' . $posteo->id)}}">
                    <div class="card bg-ennoia-dark-2 rounded-4 p-3 overflow-hidden text-white blog-card">
                        <img src="{{url('img/home-bg-img.png')}}" class="rounded-3 card-img-top" alt="...">
                        <div class="card-body text-left">
                            <h2 class="h4 py-2 card-title fw-bold text-ennoia">{{$posteo->titulo}}</h2>
                            <div class="d-flex justify-contnt-between">
                                <small class="text-success"> {{$posteo->categoria}}</small>
                                <small>{{$posteo->fecha}}</small>
                            </div>
                            <p class="card-text">{{$posteo->noticia }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach



    </div>
</section>
@endsection


