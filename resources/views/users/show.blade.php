<?php
<<<<<<< HEAD
$ultimoPago = $pagos->sortByDesc('created_at')->first();
=======
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
?>
@extends('layout.main')

@section('title', ' mi perfil')

@section('content')


<<<<<<< HEAD

<section class="container my-5">
    <div class="row">
        <h1 >
            Mi perfil
        </h1>
        <div class="col-md-3">

            <div class="my-4">
                <h2>
                    Datos
                </h2>
                <p>
                    {{ $user->name }}
                </p>
                <p>
                    {{ $user->email }}
                </p>

                <a href="/mi-perfil/{{$user->id}}/editar-datos" class="d-inline-block btn-ennoia my-4 text-center">
                    modificar datos
                </a>
            </div>
        </div>

        <div class="my-4 pt-4 col-md-4 {{ $ultimoPago && $ultimoPago->collection_status !== 'approved' ? ' border border-danger' : 'border border-success' }}">
            <h2>
                Suscrición
            </h2>
            <div class="">
                @if (isset($user->servicosPorUsuario->nombre))
                    <p>
                        {{ isset($user->servicosPorUsuario->nombre) ? $user->servicosPorUsuario->nombre : "" }}
                    </p>
                    <p>
                        {{ isset($user->servicosPorUsuario->descripcion) ? $user->servicosPorUsuario->descripcion : "" }}
                    </p>
                    <img src="{{ asset('storage/' . $user->servicosPorUsuario->img) }}" alt="{{ $user->servicosPorUsuario->descripcion_img }}" class="img-fluid rounded">
                    <a href="/servicios" class="d-inline-block btn-ennoia my-4 text-center" >
                        Modificar
                    </a>
                    <a href="/servicios/{{$user->id}}/cancelar-servicio" class="d-inline-block btn-ennoia my-4 text-center" >
                        Cancelar
                    </a>
                @else
                    <p class="mb-2 text-danger">
                        No tienes suscripción
                    </p>
                    <a href="/servicios" class="d-inline-block btn-ennoia my-4 text-center" >
                        Suscribirme
                    </a>
                @endif
            </div>
        </div>

        <div class="my-4 col-12 col-md-4">
            <h2>
                Ultima suscripción
            </h2>

            @if($ultimoPago)
                <div class="pb-4">
                    <p>
                        <b>Estás suscripto desde el:</b> {{ $ultimoPago->created_at->format('d/m/Y') }}
                    </p>
                    <p> estado:<b class="{{ $ultimoPago && $ultimoPago->collection_status !== 'approved' ? 'text-danger' : 'text-success' }}">
                        <?php if($ultimoPago->collection_status == 'approved'){
                            echo 'aprobado';
                        }else {
                            echo 'pendiente';
                        }
                        ?></b>
                    </p>
                    <p>
                        <b>Servicio:</b> {{ $ultimoPago->servicio->nombre }}
                    </p>
                    <p>
                        <b>metodo de pago:</b> {{ $ultimoPago->payment_type }}
                    </p>
                </div>
            @else
                <p class="text-danger">No hay pagos registrados.</p>
            @endif
        </div>
    </div>
=======
<section class="container my-5">
    <div class="col-md-4">
        <h1 >
            Mi perfil
        </h1>
    </div>
    <div class="my-4 col-md-4">
        <h2>
            Datos
        </h2>
        <p>
            {{ $user->name }}
        </p>
        <p>
            {{ $user->email }}
        </p>
    </div>

    <div class="my-4 col-md-4">
        <h2>
            Suscrición
        </h2>
        @if (isset($user->servicosPorUsuario->nombre))
            <p>
                {{ isset($user->servicosPorUsuario->nombre) ? $user->servicosPorUsuario->nombre : "" }}
            </p>
            <p>
                {{ isset($user->servicosPorUsuario->descripcion) ? $user->servicosPorUsuario->descripcion : "" }}
            </p>
            <img src="{{ asset('storage/' . $user->servicosPorUsuario->img) }}" alt="{{ $user->servicosPorUsuario->descripcion_img}}" class="img-fluid rounded">

            <a href="/servicios" class="d-inline-block btn-ennoia my-4 text-center" >
                Modificar
            </a>
        @else
            <p class="mb-2 text-danger">
                No tienes suscripción
            </p>
            <a href="/servicios" class="d-inline-block btn-ennoia my-4 text-center" >
                Suscribirme
            </a>
        @endif

    </div>

>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5

</section>

@endsection
