<?php
use app\model\User;
use app\model\Servicio;
use illuminate\database\eloquent\Collection;

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

        <div class="mb-3 visually-hidden">
            <label for="servicio_id" class="form-label">servicio_id</label>
            <input type="text" id="servicio_id" name="servicio_id"
            class="form-control input-admin @error('titulo') is-invalid @enderror"
            value="{{ null }}">

            @error('user_id')
                <p class="text-danger">
                    {{ $servicio_id }}
                </p>
            @enderror
        </div>

        <div class="mb-3 visually-hidden">
            <label for="id" class="form-label">servicio_id</label>
            <input type="text" id="id" name="id"
            class="form-control input-admin @error('titulo') is-invalid @enderror"
                value="{{$user->id}}"
                >
            @error('user_id')
                <p class="text-danger">
                    {{ $servicio_id }}
                </p>
            @enderror
        </div>



        <button type="submit" class="btn btn-danger mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Confirmar</button>

    </form>
</section>
@endsection
