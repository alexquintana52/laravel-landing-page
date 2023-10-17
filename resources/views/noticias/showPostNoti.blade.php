@extends('layout.main')

@section('title', $noticiasPost->titulo)

@section('contenido')

    <div class="row">

        <div class="col-6">
            <h1>{{$noticiasPost->titulo }}</h1>
            <p>{{$noticiasPost->noticia }}</p>
            <p>{{$noticiasPost->fecha}}</p>
            <p>{{$noticiasPost->funcionalidades }}</p>
            <p>{{$noticiasPost->Fecha}}</p>
        </div>
        <div class="col-4">
            <?php
                echo $noticiasPost->img;
                ?>
            @if ($noticiasPost->img !== null)
                <img src="{{asset('storage/' . $noticiasPost->img)}}" alt="{{$noticiasPost->descripcion_img }}">
            @else
                <img src="{{asset('img/generica.jpg')}}" alt="">
            @endif
        </div>
    </div>


@endsection
