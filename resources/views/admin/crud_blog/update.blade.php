<?php
/**
 * @var \iluminate\Support\Collection $errors
 */
/**
 * @var Blog $blogPost
 */
use app\model\Blog;
?>

@extends('layout.main')

@section('title', $blogPost->titulo)

@section('content')

    <div class="container my-5">

        <h1 class="mb-5 text-center">Editar entrada</h1>

        <form action="{{ url('/admin/blog/' . $blogPost->id . '/editar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" id="titulo" name="titulo" class="form-control input-admin @error('titulo') is-invalid @enderror"
                    value="{{ old('titulo', $blogPost->titulo) }}"
                    @error('titulo')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror>
                @error('titulo')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="noticia" class="form-label">Entrada</label>
                <textarea type="text" id="noticia" name="noticia" class="form-control text-area-admin @error('noticia') is-invalid @enderror"
                    @error('noticia')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror>{{ old('noticia', $blogPost->noticia) }}</textarea>
                @error('noticia')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <select type="text" id="categoria_id" name="categoria_id" class="form-control input-admin @error('categoria_id') is-invalid @enderror"
                @error('categoria_id')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                value="{{old('categoria_id')}}"
                >
                @foreach ($categoria_blog as $categoria)
                    <option value="{{$categoria->categoria_id}}"

                    @selected(old('categoria_id', $blogPost->categoria_id ) == $categoria->categoria_id)
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
                <div  class="mb-2">
                    @if ($blogPost->img )
                        <img src="{{ asset('storage/' . $blogPost->img) }}" alt="{{ $blogPost->titulo }}" class="img-fluid">
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
                    @error('descripcion_img', $blogPost->descripcion_img)
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
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" id="fecha" name="fecha"
                    class="form-control input-admin @error('fecha') is-invalid @enderror"
                    @error('fecha')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                    value="{{ old('fecha', $blogPost->fecha) }}">
                @error('fecha')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Editar</button>
        </form>
    </div>
@endsection
