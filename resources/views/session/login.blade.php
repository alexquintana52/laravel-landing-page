@extends('layout.main')

@section('title', 'Iniciar sesión')

@section('contenido')
<div class="container">
    <h1>Iniciar sesión </h1>

    <form action="{{url('/iniciar-sesion')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}" autocomplete="off">
            @error('email')
                <p class="text-danger">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" autocomplete="off">
            @error('password')
                <p class="text-danger">
                    {{$message}}
                </p>
            @enderror
        </div>

        <button class="btn btn-primary">Ingresar</button>
    </form>
</div>
@endsection
