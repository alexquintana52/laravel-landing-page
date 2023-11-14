@extends('layout.main')

@section('title', 'Admin | Usuarios')

@section('content')

    @section('content')

    <div class="container my-5">

        <h1 class="mb-5 text-center">Admin Noticias</h1>

        <table class="table overflow-scroll">
            <thead>
                <tr>
                    <th class="bg-dark text-white p-3">Nombre</th>
                    <th class="bg-dark text-white p-3">Email</th>
                    <th class="bg-dark text-white p-3">Rol</th>
                    <th class="bg-dark text-white p-3 text-center">Subscripciones</th>
                    <th class="bg-dark text-white p-3"></th>
                </tr>
            </thead>
            <div>
            </div>
            <tbody>
                @foreach ($user as $dato)
                    <tr>
                        <td class="bg-dark text-white p-3">{{ $dato->name }}</td>
                        <td class="bg-dark text-white p-3">{{ $dato->email }}</td>
                        <td class="bg-dark text-white p-3">{{ $dato->rol }}</td>
                        <td class="bg-dark text-white p-3 text-center">{{ isset($dato->servicosPorUsuario->nombre) ? $dato->servicosPorUsuario->nombre : "" }}</td>
                        <td class="bg-dark text-white p-3">
                            <div class="d-flex gap-2">
                                <a href="{{ url('/usuarios/' . $dato->id) }}" class=" d-inline-block btn-ennoia"
                                    target="_blank">Ver</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
