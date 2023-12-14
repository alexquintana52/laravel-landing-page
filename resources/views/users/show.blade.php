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

@section('title', ' mi perfil')

@section('content')



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
                Suscripción actual
            </h2>

            @if($ultimoPago)
                <div class="pb-4">
                    <p>
                        @if ($ultimoPago->collection_status == 'approved')
                            <b>Estás suscripto desde el:</b> {{ $ultimoPago->created_at->format('d/m/Y') }}
                        @elseif ($ultimoPago->collection_status == 'pending')
                            <b>Tu suscripción está pendiente desde el :</b> {{ $ultimoPago->created_at->format('d/m/Y') }}
                        @else
                            <b>Cancelaste tu suscripción el :</b> {{ $ultimoPago->created_at->format('d/m/Y') }}
                        @endif
                    </p>
                    <p> estado:<b class="{{ $ultimoPago && $ultimoPago->collection_status !== 'approved' ? 'text-danger' : 'text-success' }}">
                        @if($ultimoPago->collection_status == 'approved')
                            aprobado
                        @elseIf($ultimoPago->collection_status == 'pending')
                            pendiente
                        @else
                            cancelado
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
                        <b>metodo de pago:</b> {{ $ultimoPago->payment_type }}
                        @else
                        <b>metodo de pago:</b> -
                        @endif
                    </p>
                    @if (isset($ultimoPago->servicio->nombre))
                        <p>
                            {{ isset($ultimoPago->servicio->descripcion) ? $ultimoPago->servicio->descripcion : "" }}
                        </p>
                        <img src="{{ asset('storage/' . $ultimoPago->servicio->img) }}" alt="{{ $ultimoPago->servicio->descripcion_img }}" class="img-fluid rounded">
                        <a href="/servicios" class="d-inline-block btn-ennoia my-4 text-center" >
                            Modificar
                        </a>
                        <a href="/servicios/{{$ultimoPago->servicio->servicio_id}}/cancelar-servicio" class="d-inline-block btn-ennoia my-4 text-center" >
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
            @else
                <p class="text-danger">No hay pagos registrados.</p>
            @endif
        </div>

        <div class="my-4 pt-4 col-md-4">
            <h2>
                ultima suscripción aprobada
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
                    <p> estado:<b class="{{ $ultimoAprobado && $ultimoAprobado->collection_status !== 'approved' ? 'text-danger' : 'text-success' }}">
                        @if($ultimoAprobado->collection_status == 'approved')
                            aprobado
                        @elseIf($ultimoAprobado->collection_status == 'pending')
                            pendiente
                        @else
                            cancelado
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
                        <b>metodo de pago:</b> {{ $ultimoAprobado->payment_type }}
                        @else
                        <b>metodo de pago:</b> -
                        @endif
                    </p>
                    @if (isset($ultimoAprobado->servicio->nombre))
                        <p>
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

</section>

@endsection
