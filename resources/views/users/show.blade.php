
@extends('layout.main')

@section('title', 'Ennoia | Perfil')

@section('content')

<section class="container mb-5">

    <div class="row gy-4">
        <div class="col-12 col-md-6 col-lg-4">
        <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 text-center h-100">
            <div class="mb-4">
            <img src="{{ url('img/logo/ennoia-pet.svg') }}" width="65" alt="">
            </div>
            <h3 class="mb-4 text-ennoia">Codi</h3>
            <p>Conocé a tu mascota preferida para seguir aprendiendo. Codi será tu guía y fiel compañero en tu camino de aprendizaje.</p>
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
        <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 text-center h-100">
            <div class="mb-4">
            <img src="{{ url('img/medal.png') }}" width="100" alt="">
            </div>
            <h3 class="mb-4 text-ennoia">Premios</h3>
            <p>Grandes recompensas y desafíos te esperan en tu camino para seguir aprendiendo, no te los pierdas.</p>
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
        <div class="bg-ennoia-dark-2 py-5 px-4 p-md-5 rounded-3 text-center h-100">
            <div class="mb-4">
            <img src="{{ url('img/app.png') }}" width="100" alt="">
            </div>
            <h3 class="mb-4 text-ennoia">Desde donde sea</h3>
            <p>Ya sea que estes en tu computadora o en tu celular, tu progreso estará donde quiera que estes.</p>
        </div>
        </div>
    </div>


</section>

@endsection
