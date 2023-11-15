<?php
use app\model\Noticias;
use app\model\Categoria_noticias;
use app\model\Genero;
use illuminate\database\eloquent\Collection;
/**
 * @var \iluminate\Support\Collection $errors
 * @var Catalogo_noticias | Collection $catalogo_noticias
 */

?>
@extends('layout.main')

@section('title', 'Nueva Noticia')

@section('content')

    <div class="container my-5">

        <h1 class="mb-5 text-center">Nueva Noticia</h1>

        <form action="{{ url('/admin/noticias/nuevaEntrada' )}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input
                type="text"
                id="titulo"
                name="titulo"
                class="form-control input-admin @error('titulo') is-invalid @enderror"
                value="{{old('titulo')}}"
                @error('titulo')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                >
                @error('titulo')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="noticia" class="form-label">Noticia</label>
                <textarea type="text" id="noticia" name="noticia" class="form-control text-area-admin
                @error('noticia') is-invalid @enderror"
                @error('noticia')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                >{{old('noticia')}}</textarea>
                @error('noticia')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="funcionalidades" class="form-label">Funcionalidades</label>
                <input type="text" id="funcionalidades" name="funcionalidades"
                class="form-control input-admin @error('funcionalidades') is-invalid @enderror"
                @error('funcionalidades')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                value="{{old('funcionalidades')}}"
                >
                @error('funcionalidades')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <select id="categoria_id" name="categoria_id" class="form-control input-admin @error('categoria_id') is-invalid @enderror"
                @error('categoria_id')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                value="{{old('categoria_id')}}"
                >
                @foreach ($categoria_noticias as $categoria)
                    <option value="{{$categoria->categoria_id}}"

                    @selected(old('categoria_id') == $categoria->categoria_id)
                        >
                    {{$categoria->nombre}}
                    </option>
                @endforeach
                </select>
                    @error('categoria_id')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Portada</label>
                <input type="file" id="img" name="img"
                class="form-control input-admin @error('img') is-invalid @enderror"
                @error('img')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                >
                @error('img')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descripcion_img" class="form-label">Descripción portada</label>
                <input type="text" id="descripcion_img" name="descripcion_img"
                class="form-control input-admin @error('descripcion_img') is-invalid @enderror"
                @error('descripcion_img')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                value="{{old('descripcion_img')}}"
                >
                @error('descripcion_img')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" id="title" name="fecha"
                class="form-control input-admin @error('fecha') is-invalid @enderror"
                @error('fecha')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                value="{{old('fecha')}}"
                >
                @error('fecha')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <fieldset>
                <legend>Géneros</legend>
                @foreach ($generos as $value)
                <label class="mx-2">
                    <input
                    type="checkbox"
                    name="generos[]"
                    value="{{$value->genero_id}}"
                    class="form-check-input"
                    @checked(in_array($value->genero_id, old('generos', [])))
                    >
                    <span class="form-check-label">
                        {{$value->nombre}}
                    </span>
                </label>
                @endforeach

            </fieldset>
            <button type="submit" class="btn btn-ennoia mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Crear</button>
        </form>
    </div>

@endsection
