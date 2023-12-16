<?php
use app\model\User;
use illuminate\database\eloquent\Collection;


?>

@extends('layout.main')

@section('title', 'Ennoia | Iniciar Sesión')

@section('content')

    <section class="bg-ennoia">
        <div class="container py-5 login-section">
            <div class="row text-center d-flex flex-column align-items-center justify-content-center">
                <img src="{{ url('img/logo/logo-ennoia.svg') }}" class="logo-ennoia" />
                <h3 class="fs-5 my-4">Registrate en Ennoia</h3>
                <div class="col-12 col-md-6 col-lg-4">
                    <form action="{{ url('/registrarse') }}" method="POST" class="form-ennoia d-flex flex-column align-items-center justify-content-center" enctype="multipart/form-data">
                        @csrf
        
                            <label for="name" class="form-label visually-hidden">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control input-ennoia @error('name') is-invalid @enderror"
                                placeholder="Nombre de usuario"
                                value="{{ old('name') }}"
                                @error('name')
                                aria-describedby="error-title"
                                aria-invalid="true"
                            @enderror>
                            @error('name')
                                <p class="text-ennoia mb-4">
                                    {{ $message }}
                                </p>
                            @enderror
        
        
                            <label for="email" class="form-label visually-hidden">Email</label>
                            <input type="email" id="email" name="email" class="form-control input-ennoia @error('titulo') is-invalid @enderror"
                                placeholder="Correo electrónico"    
                                value="{{ old('email') }}"
                                @error('email')
                                aria-describedby="error-title"
                                aria-invalid="true"
                            @enderror>
                            @error('email')
                                <p class="text-ennoia mb-4">
                                    {{ $message }}
                                </p>
                            @enderror
        
                            <label for="password" class="form-label visually-hidden">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control input-ennoia mb-2 @error('titulo') is-invalid @enderror"
                                placeholder="Contraseña"
                                value="{{ old('password') }}"
                                @error('email')
                                aria-describedby="error-title"
                                aria-invalid="true"
                            @enderror>
                            @error('password')
                                <p class="text-ennoia mb-4">
                                    {{ $message }}
                                </p>
                            @enderror
        
                        <div class="mb-3">
                            <label for="rol" class="visually-hidden"
                            value="user"
                            ></label>
                            <input type="text" id="rol" name="rol" class="form-control input-admin visually-hidden" value="user">
                        </div>
        
                        <button class="btn-ennoia form-control">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
