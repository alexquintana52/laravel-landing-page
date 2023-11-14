
@extends('layout.main')

@section('title', 'Ennoia | Perfil')

@section('content')




<section class="my-5 container">
    <h1 class="h4 py-2 ">Servicios </h1>
    <div class="row gy-5">
        @foreach ($servicios as $servicio)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 bg-ennoia-dark-light rounded-3 overflow-hidden text-white">
                <img src="{{ asset('storage/' . $servicio->img) }}" alt="{{ $servicio->descripcion_img }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h2 class="h4 py-2 card-title fw-bold text-ennoia">{{ $servicio->nombre }}</h2>
                    <p class="card-text">{{ $servicio->descripcion }}</p>
                </div>
                @auth
                <form action="{{ url('/' )}}" method="POST" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <input type="hidden" name="servicio_id" value="{{ $servicio->servicio_id }}">
                    <label for="servicio_id" type="hidden"></label>

                    <button  class="btn-ennoia d-inline-block mb-3 mt-4">Adquirir</button>
                </form>
                @else
                <div class="text-center">
                    <a href="{{ url('/iniciar-sesion') }}" class="btn-ennoia d-inline-block mb-3 mt-4">Adquirir</a>
                </div>
                @endauth

            </div>
        </div>
        @endforeach

    </div>
</section>

@endsection
