<?php
use app\model\User;
use app\model\Servicio;
use illuminate\database\eloquent\Collection;

?>

@extends('layout.main')

@section('title', 'Editar mis datos')

@section('content')

    <section class="bg-ennoia text-start">
        <div class="container my-5">
            <h1 class="mb-5 text-center">Suscripción de {{$user->name}}</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <form action="{{ url('mi-perfil/'. $user->id.'/editar-datos') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control input-ennoia" id="name" aria-describedby="nameHelp">
                                @error('name')
                                    <small id="nameHelp" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control input-ennoia" id="email" aria-describedby="emailHelp">
                                @error('email')
                                    <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password" value="" class="form-control input-ennoia" id="password" aria-describedby="passwordHelp">
                                @error('password')
                                    <small id="passwordHelp" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
            
                        <button type="submit" class="btn-ennoia-update w-100 mt-4 px-5 mx-auto d-flex justify-content-center">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
