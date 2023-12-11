@extends('layout.main')

@section('title', 'Admin | Noticias')

@section('content')

    <div class="container my-5">

        <h1 class="mb-5 text-center">Admin Noticias</h1>

        <div class="text-center">
            <a href="{{ url('/admin/noticias/nuevaEntrada') }}" class="mb-5 d-inline-block btn-ennoia">Nueva entrada</a>
        </div>

        <table class="table overflow-scroll">
            <thead>
                <tr>
                    <th class="bg-dark text-white p-3">Titulo</th>
                    <th class="bg-dark text-white p-3">Noticia</th>
                    <th class="bg-dark text-white p-3">Categoria</th>
                    <th class="bg-dark text-white p-3">Fecha</th>
                    <th class="bg-dark text-white p-3">Imagenes</th>
                    <th class="bg-dark text-white p-3">Generos</th>
                    <th class="bg-dark text-white p-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noticiasPost as $posteo)
                    <tr>
                        <td class="bg-dark text-white p-3">{{ $posteo->titulo }}</td>
                        <td class="bg-dark text-white p-3">{{ $posteo->noticia }}</td>
                        <td class="bg-dark text-white p-3">{{ $posteo->categoria_noticias->nombre }}</td>
                        <td class="bg-dark text-white p-3">{{ $posteo->fecha }}</td>
                        <td class="bg-dark text-white p-3">
                            <img src="{{ asset('storage/' . $posteo->img) }}" alt="{{ $posteo->descripcion_img}}" class="img-fluid rounded">
                        </td>
                        <td class="bg-dark text-white p-3">
                            @forelse ( $posteo->generos as $genero )
                                <span class="badge bg-secondary px-4 py-2">
                                    {{ $genero->nombre }}
                                </span>
                            @empty
                                <span class="badge bg-secondary px-4 py-2">
                                    No tiene generos asociados
                                </span>
                            @endforelse
                        </td>
                        <td class="bg-dark text-white p-3">
                            <div class="d-flex gap-2">
                                <a href="{{ url('/noticias/' . $posteo->id) }}" class="btn btn-small btn-primary"
                                    target="_blank">Ver</a>
                                <a href="{{ url('admin/noticias/' . $posteo->id . '/editar') }}"
                                    class="btn btn-small btn-warning">Editar</a>
                                <a href="{{ url('admin/noticias/' . $posteo->id . '/borrar') }}"
                                    class="btn btn-small btn-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $noticiasPost->links()}}
    </div>

@endsection
