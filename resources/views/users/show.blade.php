<?php
/* echo "<pre>";
print_r($ultimoPago);
echo "</pre>";
echo "<pre>";
print_r($ultimoAprobado);
echo "</pre>";
*/
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
        <div class="row justify-content-center align-items-center text-center text-md-start">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="my-4 p-4 bg-ennoia-dark-2 {{ $ultimoPago && $ultimoPago->collection_status !== 'approved' ? ' border border-danger' : 'border border-2 border-ennoia rounded-2' }}">
                    <h2>
                        Suscripción actual
                    </h2>
    
                    @if($ultimoPago)
                        <div>
                            <p>
                                @if ($ultimoPago->collection_status == 'approved')
                                    <b>Estás suscripto desde el:</b> {{ $ultimoPago->created_at->format('d/m/Y') }}
                                @elseif ($ultimoPago->collection_status == 'pending')
                                    <b>Tu suscripción está pendiente desde el :</b> {{ $ultimoPago->created_at->format('d/m/Y') }}
                                @else
                                    <b>Cancelaste tu suscripción el :</b> {{ $ultimoPago->created_at->format('d/m/Y') }}
                                @endif
                            </p>
                            <p> Estado: <b class="{{ $ultimoPago && $ultimoPago->collection_status !== 'approved' ? 'text-danger' : 'text-ennoia' }}">
                                @if($ultimoPago->collection_status == 'approved')
                                    Aprobado
                                @elseIf($ultimoPago->collection_status == 'pending')
                                    Pendiente
                                @else
                                    Cancelado
                                @endif
                                </b>
                            </p>
                            <p>
                                <b>Servicio:</b>
                                @if($ultimoPago->servicio_id !== NULL)
                                    {{ $ultimoPago->servicio_id }}
                                @else
                                    {{ $ultimoPago->servicio_id }}
                                @endif
                            </p>
                            <p>
                                @if ($ultimoPago->payment_type !== 'NULL')
                                <b>Método de pago: </b><span class="text-capitalize">{{ $ultimoPago->payment_type }}</span>
                                @else
                                <b>Método de pago:</b> -
                                @endif
                            </p>
                            @if (isset($ultimoPago->servicio->nombre))
                                <p class="mt-3 mb-2">
                                    {{ isset($ultimoPago->servicio->descripcion) ? $ultimoPago->servicio->descripcion : "" }}
                                </p>
                                <img src="{{ asset('storage/' . $ultimoPago->servicio->img) }}" alt="{{ $ultimoPago->servicio->descripcion_img }}" class="img-fluid rounded-2 mt-3">
                                <div class="text-center">
                                    <a href="/servicios" class="d-inline-block btn-ennoia mt-4 text-center" >
                                        Modificar
                                    </a>
                                    <a href="/servicios/{{$ultimoPago->servicio->servicio_id}}/cancelar-servicio" class="d-inline-block btn-ennoia mt-4 text-center" >
                                        Cancelar
                                    </a>
                                </div>
                            @else
                                <p class="mb-2 text-danger">
                                    No tienes suscripción
                                </p>
                                <a href="/servicios" class="d-inline-block btn-ennoia my-4 text-center" >
                                    Suscribirme
                                </a>
                            @endif
                        </div>
                    @else
                        <p class="text-danger">No hay pagos registrados.</p>
                    @endif
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="my-4 p-4 bg-ennoia-dark-light rounded-2">
                    <h2>
                        Última suscripción activa
                    </h2>
    
                    @if($ultimoAprobado)
                        <div class="pb-4">
                            <p>
                                @if ($ultimoAprobado->collection_status == 'approved')
                                    <b>Estás suscripto desde el:</b> {{ $ultimoAprobado->created_at->format('d/m/Y') }}
                                @elseif ($ultimoAprobado->collection_status == 'pending')
                                    <b>Tu suscripción está pendiente desde el :</b> {{ $ultimoAprobado->created_at->format('d/m/Y') }}
                                @else
                                    <b>Cancelaste tu suscripción el :</b> {{ $ultimoAprobado->created_at->format('d/m/Y') }}
                                @endif
                            </p>
                            <p> Estado: <b class="{{ $ultimoAprobado && $ultimoAprobado->collection_status !== 'approved' ? 'text-danger' : 'text-ennoia' }}">
                                @if($ultimoAprobado->collection_status == 'approved')
                                    Aprobado
                                @elseIf($ultimoAprobado->collection_status == 'pending')
                                    Pendiente
                                @else
                                    Cancelado
                                @endif
                                </b>
                            </p>
                            <p>
                                <b>Servicio:</b>
                                @if($ultimoAprobado->servicio_id !== NULL)
                                    {{ $ultimoAprobado->servicio_id }}
                                @else
                                    {{ $ultimoAprobado->servicio_id }}
                                @endif
                            </p>
                            <p>
                                @if ($ultimoAprobado->payment_type !== 'NULL')
                                <b>Método de pago: </b> <span class="text-capitalize">{{ $ultimoAprobado->payment_type }}</span>
                                @else
                                <b>Método de pago: </b> -
                                @endif
                            </p>
                            @if (isset($ultimoAprobado->servicio->nombre))
                                <p class="mt-3 mb-4">
                                    {{ isset($ultimoAprobado->servicio->descripcion) ? $ultimoAprobado->servicio->descripcion : "" }}
                                </p>
                                <img src="{{ asset('storage/' . $ultimoAprobado->servicio->img) }}" alt="{{ $ultimoAprobado->servicio->descripcion_img }}" class="img-fluid rounded">
    
                            @endif
                        </div>
                    @else
                        <p class="text-danger">No hay registros.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
