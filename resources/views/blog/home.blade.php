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

    <section class="container my-5">
        {{-- <div class="pb-4">
            <form action="{{ url('/blog') }}" method="GET" >
                <!-- Search form -->
                <label for="titulo"></label>
                <input class="form-control" type="text" name="titulo" placeholder="Search" aria-label="Search">
            </form>
        </div> --}}
        <div class="mb-5 row gy-4 align-items-center">
            <div class="col-12 col-md-6">
                <h2 class="text-center text-md-start"><span class="text-ennoia">|</span> Posteos Recientes</h2>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{ url('/blog') }}" method="GET">
                    <!-- Search form -->
                    <label class="d-none" for="titulo"></label>
                    <input class="form-control input-ennoia-2" autocomplete="off" type="text" name="titulo" placeholder="Buscar posteo" aria-label="Search">
                </form>
            </div>
        </div>
        <div class="row gy-4">

            @foreach ($blogPost as $posteo)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{ url('/blog/' . $posteo->id) }}">
                        <div class="card bg-ennoia-dark-2 rounded-4 p-3 overflow-hidden text-white blog-card h-100">
                            <img src="{{ url('/storage/' . $posteo->img) }}" class="rounded-3 card-img-top object-fit-cover h-100" alt="{{ $posteo->descripcion_img }}">
                            <div class="card-body text-left px-0">
                                <h2 class="h4 card-title card-title-clamp fw-bold">{{ $posteo->titulo }}</h2>
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
