<?php
use app\model\User;
use app\model\Servicio;
use illuminate\database\eloquent\Collection;

?>

@extends('layout.main')

@section('title', 'Editar mis datos')

@section('content')

    <div class="container my-5">

        <h1 class="mb-5 text-center">Suscripción de {{$user->name}}</h1>

        <form action="{{ url('mi-perfil/'. $user->id.'/editar-datos') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" id="name" aria-describedby="nameHelp">
                    @error('name')
                        <small id="nameHelp" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" id="email" aria-describedby="emailHelp">
                    @error('email')
                        <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" value="" class="form-control" id="password" aria-describedby="passwordHelp">
                    @error('password')
                        <small id="passwordHelp" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

            <button type="submit" class="btn btn-ennoia-update mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Editar</button>
        </form>
    </div>

@endsection
