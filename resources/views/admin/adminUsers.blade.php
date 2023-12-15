@extends('layout.main')

@section('title', 'Ennoia | Administrar Usuarios')

@section('content')

<section class="bg-ennoia text-start align-items-start">
    <div class="container my-5">
        <h1 class="mb-5 text-center">Admin Usuarios</h1>
        <table class="table overflow-scroll">
            <thead>
                <tr>
                    <th class="bg-dark text-white p-3">Nombre</th>
                    <th class="bg-dark text-white p-3">Email</th>
                    <th class="bg-dark text-white p-3">Rol</th>
                    <th class="bg-dark text-white p-3 text-center">Subscripciones</th>
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
                        <td class="bg-dark text-white p-3 text-center">
                            @if (isset($dato->servicosPorUsuario->nombre))
                                    <span class="badge bg-lime text-dark fw-semibold px-4 py-2">
                                        {{$dato->servicosPorUsuario->nombre }}
                                    </span>
                            @else
                                <span class="badge bg-danger fw-semibold px-4 py-2">
                                    No tiene servicios asociados
                                </span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $user->links()}}
    </div>
</section>

@endsection
