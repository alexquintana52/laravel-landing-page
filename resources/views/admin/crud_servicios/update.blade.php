<?php
use app\model\Servicio;
use app\model\Catalogo_servicio;
use illuminate\database\eloquent\Collection;

?>

@extends('layout.main')

@section('title', 'Editar servicio')

@section('content')

    <div class="container my-5">

        <h1 class="mb-5 text-center">Nueva servicio</h1>

        <form action="{{ url('admin/servicios/' . $servicio->servicio_id. '/editar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control input-admin @error('titulo') is-invalid @enderror"
                    value="{{ old('nombre', $servicio->nombre) }}"
                    @error('nombre')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror>
                @error('nombre')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea type="text" id="descripcion" name="descripcion" class="form-control text-area-admin @error('noticia') is-invalid @enderror"
                    @error('descipcion')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror>{{ old('descripcion') }} {{ old('noticia', $servicio->descripcion) }}</textarea>
                @error('descripcion')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-3">
                <div  class="mb-2">
                    @if ($servicio->img )
                        <img src="{{ asset('storage/' . $servicio->img) }}" alt="{{ $servicio->descripcion_img }}" class="img-fluid">
                    @else
                        <p>No hay imagen</p>
                    @endif
                </div>
                <label for="img" class="form-label">Portada</label>
                <input type="file" id="img" name="img" class="form-control input-admin @error('img') is-invalid @enderror"
                    @error('img')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror>
                @error('img')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="descripcion_img" class="form-label">Descripción portada</label>
                <input type="text" id="descripcion_img" name="descripcion_img"
                    class="form-control input-admin @error('descripcion_img') is-invalid @enderror"
                    value="{{ old('descripcion_img', $servicio->descripcion_img) }}"
                @error('descripcion_img', $servicio->descripcion_img)
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                    value="{{ old('descripcion_img') }}">
                @error('descripcion_img')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <button type="submit" class="btn btn-ennoia-update mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Modificar</button>
        </form>
    </div>

@endsection
