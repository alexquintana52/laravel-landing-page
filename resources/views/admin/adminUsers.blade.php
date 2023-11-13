@extends('layout.main')

@section('title', 'Admin | Usuarios')

@section('content')

    @section('content')

    <div class="container my-5">

        <h1 class="mb-5 text-center">Admin Noticias</h1>

        <div class="text-center">
            <a href="{{ url('/admin/noticias/nuevaEntrada') }}" class="mb-5 d-inline-block btn-ennoia">Nueva entrada</a>
        </div>

        <table class="table overflow-scroll">
            <thead>
                <tr>
                    <th class="bg-dark text-white p-3">Nombre</th>
                    <th class="bg-dark text-white p-3">Email</th>
                    <th class="bg-dark text-white p-3">Subscripciones</th>
                    <th class="bg-dark text-white p-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $dato)
                    <tr>
                        <td class="bg-dark text-white p-3">{{ $dato->name }}</td>
                        <td class="bg-dark text-white p-3">{{ $dato->email }}</td>
                        <td class="bg-dark text-white p-3"></td>
                        <td class="bg-dark text-white p-3">
                            <div class="d-flex gap-2">
                                <a href="{{ url('/noticias/' . $dato->id) }}" class="btn btn-small btn-primary"
                                    target="_blank">Ver</a>
                                <a href="{{ url('admin/noticias/' . $dato->id . '/editar') }}"
                                    class="btn btn-small btn-warning">Editar</a>
                                <a href="{{ url('admin/noticias/' . $dato->id . '/borrar') }}"
                                    class="btn btn-small btn-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection


@endsection
