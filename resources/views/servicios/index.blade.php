<?php
/* echo "<pre>";
print_r($ultimoPago);
echo "</pre>"; */
?>
@extends('layout.main')

@section('title', 'Ennoia | Servicios')

@section('content')

<section class="bg-ennoia">
    <div class="container py-5">
        <h1 class="fw-bold pb-5 pt-3 text-center">Nuestros Servicios</h1>
        <p class="h4 pb-4">
            @if ($user->servicio_id == null)
                Hola <b class="text-ennoia">{{$user->name}}</b>, ¿Querés adquirir un servicio?
            @else
            Hola <b class="text-success">{{$user->name}}</b>, ¿Querés cambiar a un nuevo servicio?
            @endif
        </p>
        <div class="row gy-5">
            @foreach ($servicios as $servicio)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 bg-ennoia-dark-light rounded-3 overflow-hidden text-white
                    @if ($servicio->servicio_id == $ultimoPago->servicio_id)
                        border-ennoia
                    @endif"
                    >
                    <img src="{{ asset('storage/' . $servicio->img) }}" alt="{{ $servicio->descripcion_img }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h2 class="h4 py-2 card-title fw-bold text-ennoia">{{ $servicio->nombre }}</h2>
                        <p class="card-text">{{ $servicio->descripcion }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <p class="py-2 card-title fw-bold text-ennoia h2">Precio: ${{ $servicio->precio }}</p>
                    </div>
                    @auth
                    <div class="container my-2">
    
                        <form action="{{ url('servicios') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 visually-hidden">
                                <label for="servicio_id" class="form-label">servicio_id</label>
                                <input type="text" id="servicio_id" name="servicio_id"
                                class="form-control input-admin @error('titulo') is-invalid @enderror"
                                    value="{{ $servicio->servicio_id }}"
                                    @error('servicio_id')
                                    aria-describedby="error-title"
                                    aria-invalid="true"
                                    @enderror
                                    >
                                @error('servicio_id')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="text-center">
                                @if($servicio->servicio_id == $ultimoPago->servicio_id)
                                <button class="btn-ennoia d-inline-block mb-3 mt-4" type="button">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                                @else
                                    <a href="{{ url('/pagoServicio/'. $servicio->servicio_id ) }}" class="btn-ennoia d-inline-block mb-3 mt-4">
                                        @if($servicio->servicio_id == $ultimoPago->servicio_id )
                                            <i class="fa-solid fa-check"></i>
                                        @else
                                            Adquirir
                                        @endif
                                    </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</section>

@endsection