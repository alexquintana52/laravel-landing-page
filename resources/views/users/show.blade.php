<?php
$ultimoPago = $pagos->sortByDesc('created_at')->first();
?>
@extends('layout.main')

@section('title', 'Ennoia | Mi Perfil')

@section('content')

<section class="bg-ennoia text-start min-vh-100 align-items-start">
    <div class="container my-5">
        <h1 class="text-center">Mi perfil</h1>
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="my-4">
                    <p class="mb-2 h3 text-ennoia fw-semibold">
                        {{ $user->name }}
                    </p>
                    <p>
                        {{ $user->email }}
                    </p>
    
                    <a href="/mi-perfil/{{$user->id}}/editar-datos" class="d-inline-block btn-ennoia my-4 text-center">
                        Editar Datos
                    </a>
                </div>
            </div>
        </div>
        <div class="row gx-0 gx-md-5 align-items-center text-center text-md-start">
            <div class="my-4 p-4 col-md-6 {{ $ultimoPago && $ultimoPago->collection_status !== 'approved' ? ' border border-danger rounded-2' : 'border border-2 border-ennoia rounded-2' }}">
                <h2>Suscripción</h2>
                @if (isset($user->servicosPorUsuario->nombre))
                    <p class="text-ennoia mb-2 h4">
                        {{ isset($user->servicosPorUsuario->nombre) ? $user->servicosPorUsuario->nombre : "" }}
                    </p>
                    <p>
                        {{ isset($user->servicosPorUsuario->descripcion) ? $user->servicosPorUsuario->descripcion : "" }}
                    </p>
                    <img src="{{ asset('storage/' . $user->servicosPorUsuario->img) }}" alt="{{ $user->servicosPorUsuario->descripcion_img }}" class="img-fluid rounded-2 mt-3">
                    <div class="text-center">
                        <a href="/servicios" class="d-inline-block btn-ennoia mt-4 text-center" >
                            Modificar
                        </a>
                        <a href="/servicios/{{$user->id}}/cancelar-servicio" class="d-inline-block btn-ennoia mt-4 text-center" >
                            Cancelar
                        </a>
                    </div>
                @else
                    <p class="mb-2 text-danger">
                        No tienes una suscripción activa
                    </p>
                    <a href="/servicios" class="d-inline-block btn-ennoia mt-4 text-center" >
                        Suscribirme
                    </a>
                @endif
            </div>
    
            <div class="my-4 col-12 col-md-6">
                <h2>
                    Ultima suscripción
                </h2>
    
                @if($ultimoPago)
                    <div class="pb-4">
                        <p>
                            <b>Estás suscripto desde el:</b> {{ $ultimoPago->created_at->format('d/m/Y') }}
                        </p>
                        <p>Estado:<b class="{{ $ultimoPago && $ultimoPago->collection_status !== 'approved' ? 'text-danger' : 'text-ennoia' }}">
                            <?php if($ultimoPago->collection_status == 'approved'){
                                echo 'Aprobado';
                            }else {
                                echo 'Pendiente';
                            }
                            ?></b>
                        </p>
                        <p>
                            <b>Servicio:</b> {{ $ultimoPago->servicio->nombre }}
                        </p>
                        <p>
                            <b>Método de pago:</b> <span class="text-capitalize">{{ $ultimoPago->payment_type }}</span>
                        </p>
                    </div>
                @else
                    <p class="text-danger">No hay pagos registrados.</p>
                @endif
            </div>
        </div>
    </section>
</section>

@endsection
