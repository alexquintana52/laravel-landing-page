<?php

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Collection;
use MercadoPago\Resources\Preference;
use MercadoPago\Item;

?>
@extends('layout.main')

@section('title', 'Ennoia | pago')

@section('content')

<section class="container py-5 login-section">
    <h1 class="h4 py-2 ">Servicios </h1>

    <div class="row gy-5 ">
        <div class="col-12 ">
            <div class="card h-100 bg-ennoia-dark-light rounded-3 overflow-hidden text-white">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <img src="{{ asset('storage/' . $servicios->img) }}" alt="{{ $servicios->descripcion_img }}" class="card-img-top " alt="...">
                    </div>
                    <div class="col-12 col-md-9" >
                        <div class="card-body text-center">
                            <h2 class="h4 py-2 card-title fw-bold text-ennoia">{{ $servicios->nombre }}</h2>
                            <p class="card-text">{{ $servicios->descripcion }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <p class="h4 py-2 card-title fw-bold text-ennoia h2">Precio: ${{ $servicios->precio }}</p>
                        </div>
                        <form action="{{ url('servicios') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 visually-hidden">
                                <label for="servicio_id" class="form-label">servicio_id</label>
                                <input type="text" id="servicio_id" name="servicio_id"
                                class="form-control input-admin @error('titulo') is-invalid @enderror"
                                    value="{{ $servicios->servicio_id }}"
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
                                <div
                                class="my-2 py-2 px-5 mx-auto d-flex justify-content-center"
                                id="venta"
                                >
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>

    </div>

<script src="https://sdk.mercadopago.com/js/v2"></script>

<script>
    /* const mp = new MercadoPago('TEST-98af3e46-af8a-4af6-a70a-7ac968256f3f'); */

    const mp = new MercadoPago("<?= $mpPublicKey; ?>");

    mp.bricks().create('wallet', 'venta',{
        initialization: {
            preferenceId: '<?= $preference->id; ?>',
        },
    });

</script>

</section>

@endsection
