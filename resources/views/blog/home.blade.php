@extends('layout.main')

@section('title', 'Ennoia | Blog')

@section('content')

    <section class="bg-ennoia">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <h1 class="fw-bold m-0 text-ennoia ff-jetbrains">Nuestro Blog</span></h1>
                    <p class="my-4">Sumerge tus sentidos en un océano de información, consejos y novedades sobre el fascinante mundo de la tecnología. Nuestro objetivo es acompañarte en tu viaje de descubrimiento, ayudándote a navegar por los avances más recientes, adquirir nuevas habilidades y mantenerte actualizado en este emocionante campo. Prepárate para explorar, aprender e inspirarte mientras te adentras en el universo digital.</p>
                </div>
            </div>
        </div>
    </section>

    <h2 class="container my-5 text-center"><span class="text-ennoia">|</span> Posteos Recientes</h2>

    <section class="container my-5">
        <div class="pb-4">
            <form action="{{ url('/blog') }}" method="GET" >
                <!-- Search form -->
                <label for="titulo"></label>
                <input class="form-control" type="text" name="titulo" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <div class="row gy-4">

            @foreach ($blogPost as $posteo)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{ url('/blog/' . $posteo->id) }}">
                        <div class="card bg-ennoia-dark-2 rounded-4 p-3 overflow-hidden text-white blog-card">
                            <img src="{{ url('/storage/' . $posteo->img) }}" class="rounded-3 card-img-top" alt="...">
                            <div class="card-body text-left px-0">
                                <h2 class="h4 py-2 card-title fw-bold">{{ $posteo->titulo }}</h2>
                                <div class="d-flex justify-content-between">
                                    <small class="text-ennoia">{{ $posteo->categoria_blog->nombre }}</small>
                                    <small class="text-ennoia">{{ $posteo->fecha }}</small>
                                </div>
                                <hr>
                                <p class="card-text card-text-clamp text-white-50">{{ $posteo->noticia }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            {{ $blogPost->links()}}

        </div>
    </section>


@endsection
