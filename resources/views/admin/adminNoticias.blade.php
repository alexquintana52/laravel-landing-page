

@extends('layout.main')

@section('title', 'Admin Noticias')

@section('contenido')
<div class="container">

    <h1>Admin Noticias</h1>
    <div class="my-3">
        <a href="{{ url('/admin/noticias/nuevaEntrada')}}">Nueva entrada</a>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Noticia</th>
                    <th>Categoria</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noticiasPost as $posteo)
                <tr>
                    <td>{{$posteo->titulo}}</td>
                    <td>{{$posteo->noticia}}</td>
                    <td>{{$posteo->categoria_noticias->nombre }}</td>
                    <td>{{$posteo->fecha}}</td>
                    <td >

                        <div class="d-flex gap-2">
                            <a href="{{ url('/noticias/'. $posteo->id)}}" class="btn btn-small btn-primary" target="_blank">ver</a>
                            <a href="{{ url('admin/noticias/'. $posteo->id .'/editar')}}" class="btn btn-small btn-warning">Editar</a>
                            <a href="{{ url('admin/noticias/'. $posteo->id .'/borrar')}}" class="btn btn-small btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
