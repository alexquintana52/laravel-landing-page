@extends('layout.main')

@section('title', 'Ennoia | Blog')

@section('contenido')

<?php
    //dd($blogPost );
?>


<section class="blog-home">
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <h1 class="fw-bold m-0">Nuestro <span class="text-ennoia ff-jetbrains">Blog</span></h1>
                    <p class="my-4">Aquí, sumergirás tus sentidos en un océano de información, consejos y novedades sobre el fascinante mundo de la tecnología. Nuestro objetivo es acompañarte en tu viaje de descubrimiento, ayudándote a navegar por los avances más recientes, adquirir nuevas habilidades y mantenerte actualizado en este emocionante campo. Prepárate para explorar, aprender e inspirarte mientras te adentras en el universo digital. ¡Comencemos esta emocionante travesía juntos!</p>
                </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-4 first-blog">
        <div class="row">
                <div class="col-12 col-md-9 col-lg-6 ">
                    <h2 class="fw-bold text-ennoia m-0">Primer Posteo</h2>
                    <p class="my-4">Demos inicio a nuestro emocionante viaje de aprendizaje en el mundo digital. En esta primera entrada, exploraremos los cimientos de lo que será un recorrido increíble.</p>
                    <a href="" class="btn-ennoia d-inline-block mt-2">Seguir Leyendo</a>
                </div>
            </div>
    </div>
</section>

<h2 class="container my-5 text-center"><span class="text-ennoia">|</span> Posteos Recientes</h2>

<section class="container mb-5">
    <div class="row gy-4">

        @foreach ($blogPost as $posteo)
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('/blog/' . $posteo->id)}}">
                    <div class="card bg-ennoia-dark-2 rounded-4 p-3 overflow-hidden text-white blog-card">
                        <img src="{{url('img/home-bg-img.png')}}" class="rounded-3 card-img-top" alt="...">
                        <div class="card-body text-left">
                            <h2 class="h4 py-2 card-title fw-bold text-ennoia ">{{$posteo->titulo }}</h2>
                            <div class="d-flex justify-content-between">
                                <small class="text-success"> {{$posteo->categoria_blog->nombre}}</small>
                                <small class="text-success">{{$posteo->fecha}}</small>
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
