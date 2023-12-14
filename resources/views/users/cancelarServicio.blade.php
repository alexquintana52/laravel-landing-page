<?php
use app\model\User;
use app\model\Servicio;
use illuminate\database\eloquent\Collection;
use app\model\Pagos;

/* echo  "<pre>";
print_r($pagos);
echo "</pre>";
 */

?>

@extends('layout.main')

@section('title', 'Cancelar suscripción')

@section('content')

<section class="container py-5 login-section">
    <h1 class="h4 py-2 ">Cancelar suscripción</h1>
    <p class="h4 pb-2">
        Hola <b class="text-success">{{$user->name}}</b>, estás a un paso de cancelar tu suscripción. </p>
    <p>
        para cancelar la suscripción preciona confirmar   .
    </p>



    <form action="{{ url('/servicios/'. $user->id .'/cancelar-servicio') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="btn btn-danger mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Confirmar</button>
    </form>
</section>
@endsection
