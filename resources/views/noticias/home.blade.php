@extends('layout.main')

@section('title', 'Ennoia | Noticias')

@section('content')

    <section class="notices-home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <h1 class="fw-bold text-ennoia ff-jetbrains">Noticias y Novedades</span></h1>
                    <p class="my-4">Aquí encontrarás un rincón de descubrimientos constantes y actualizaciones frescas del
                        siempre emocionante universo tecnológico. Estamos aquí para mantenerte al día sobre las tendencias
                        más candentes, los avances más innovadores y las perspectivas más prometedoras en el mundo de la
                        tecnología. Así que únete a nosotros en este emocionante viaje de conocimiento y exploración
                        tecnológica. ¡Empecemos a explorar juntos el futuro!</p>
                </div>
            </div>
        </div>
    </section>

    <h2 class="container my-5 text-center"><span class="text-ennoia">|</span> Noticias Recientes</h2>

    <section class="container mb-5">
        <div class="row gy-4">

            @foreach ($noticiasPost as $posteo)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{ url('/noticias/' . $posteo->id) }}">
                        <div class="card bg-ennoia-dark border-0 rounded-4 overflow-hidden text-white notice-card">
                            <img src="{{ asset('storage/' . $posteo->img) }}" class="rounded-3 card-img-top" alt="...">
                            <div class="card-body text-left px-0">
                                <h2 class="h4 py-2 card-title fw-bold">{{ $posteo->titulo }}</h2>
                                <div class="d-flex justify-content-between">
                                    <small class="text-ennoia">{{ $posteo->categoria_noticias->nombre }}</small>
                                    <small class="text-ennoia">{{ $posteo->fecha }}</small>
                                </div>
                                <hr>
                                <p class="card-text card-text-clamp text-white-50">{{ $posteo->noticia }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </section>

@endsection
