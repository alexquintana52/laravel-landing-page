
@extends('layout.main')

@section('title', 'Admin Blog')

@section('contenido')

<div class="container">


    <h1>Admin blog</h1>

    <div class="my-3">
        <a href="{{ url('/admin/blog/nuevaEntrada')}}">Nueva entrada</a>
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
                @foreach ($blogPost as $posteo)
                <tr>
                    <td>{{$posteo->titulo}}</td>
                    <td>{{$posteo->noticia}}</td>
                    <td>{{$posteo->categoria_blog->nombre }}</td>
                    <td>{{$posteo->fecha}}</td>
                    <td >
                        <div class="d-flex gap-2">
                            <a href="{{ url('/blog/'. $posteo->id)}}" class="btn btn-small btn-primary" target="_blank">ver</a>
                            <a href="{{ url('admin/blog/'. $posteo->id .'/editar')}}" class="btn btn-small btn-warning">Editar</a>
                            <a href="{{ url('admin/blog/'. $posteo->id .'/borrar')}}" class="btn btn-small btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection


