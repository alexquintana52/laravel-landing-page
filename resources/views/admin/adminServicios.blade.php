
@extends('layout.main')

@section('title', 'Ennoia | Administrar Servicios')

@section('content')

    <section class="bg-ennoia text-start">
        <div class="container my-5">

            <h1 class="mb-5 text-center">Admin Servicios</h1>
    
            <div class="text-center">
                <a href="{{ url('/admin/servicios/nuevoServicio') }}" class="mb-5 d-inline-block btn-ennoia">Nuevo Servicio</a>
            </div>
    
            <table class="table overflow-scroll">
                <thead>
                    <tr>
                        <th class="bg-dark text-white p-3">Nombre</th>
                        <th class="bg-dark text-white p-3">Descripción</th>
                        <th class="bg-dark text-white p-3">Imagenes</th>
                        <th class="bg-dark text-white p-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicios as $posteo)
                        <tr>
                            <td class="bg-dark text-white p-3">{{ $posteo->nombre }}</td>
                            <td class="bg-dark text-white p-3">{{ $posteo->descripcion }}</td>
                            <td class="bg-dark text-white p-3">
    
                                <img src="{{ asset('storage/' . $posteo->img) }}" alt="{{ $posteo->descripcion_img}}" class="img-fluid rounded">
    
                            </td>
                            <td class="bg-dark text-white p-3">
                                <div class="d-flex gap-2">
                                    <a href="{{ url('/servicios/' . $posteo->servicio_id) }}" class=" d-inline-block btn-ennoia"
                                        target="_blank">Ver
                                    </a>
                                    <a href="{{ url('admin/servicios/' . $posteo->servicio_id. '/editar') }}" class=" d-inline-block btn-ennoia-update"
                                        target="_blank">Modificar
                                    </a>
                                    <a href="{{ url('admin/servicios/' . $posteo->servicio_id.'/borrar') }}" class=" d-inline-block btn-ennoia-delete"
                                        target="_blank">Eliminar
                                    </a>
                                </div>
                            </td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
