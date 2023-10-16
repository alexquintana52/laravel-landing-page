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

@section('contenido')
    <div class="container my-4">
        <h1>Editar entrada</h1>

        <form action="{{ url('/admin/blog/'. $blogPost->id .'/editar' )}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" id="titulo" name="titulo" class="form-control @error('titulo') is-invalid @enderror"
                value="{{old('titulo', $blogPost->titulo)}}"
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
                <label for="noticia" class="form-label">Entrada</label>
                <textarea type="text" id="noticia" name="noticia" class="form-control @error('noticia') is-invalid @enderror"
                @error('noticia')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                >{{old('noticia', $blogPost->noticia )}}</textarea>
                @error('noticia')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <input type="text" id="categoria" name="categoria" class="form-control @error('categoria') is-invalid @enderror"
                @error('categoria')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                value="{{old('categoria', $blogPost->categoria)}}"
                >
                    @error('categoria')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Portada</label>
                <input type="file" id="img" name="img" class="form-control @error('img') is-invalid @enderror"
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
                class="form-control @error('descripcion_img') is-invalid @enderror"
                @error('descripcion_img', $blogPost->descripcion_img)
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
                <input type="date" id="fecha" name="fecha"
                class="form-control @error('fecha') is-invalid @enderror"
                @error('fecha')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                value="{{old('fecha', $blogPost->fecha)}}"
                >
                @error('fecha')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary" >Crear</button>
        </form>
    </div>
@endsection
