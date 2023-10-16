<?php
/**
 * @var \iluminate\Support\Collection $errors
*/
/**
 * @var Noticias $noticiasPost
 */
use app\model\Noticias;
?>
@extends('layout.main')

@section('title', $noticiasPost->titulo)

@section('contenido')
    <h1>{{$noticiasPost->titulo }}</h1>
    <p>{{$noticiasPost->noticia }}</p>
    <p>{{$noticiasPost->fecha}}</p>
    <p>{{$noticiasPost->funcionalidades }}</p>
    <p>{{$noticiasPost->Fecha}}</p>
    <form action="{{ url('admin/noticias/'. $noticiasPost->id .'/borrar' )}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection
