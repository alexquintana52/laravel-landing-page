<?php
use app\model\User;
use app\model\Servicio;
use illuminate\database\eloquent\Collection;

?>

@extends('layout.main')

@section('title', 'Editar servicio')

@section('content')

    <div class="container my-5">

        <h1 class="mb-5 text-center">Suscripción de {{$user->name}}</h1>

        <form action="{{ url('admin/usuarios/'. $user->id.'/editar') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="servicio_id" class="form-label">Servicio de sbscripción</label>
                    <select type="text" id="servicio_id" name="servicio_id" class="form-control input-admin @error('categoria_id') is-invalid @enderror"
                    @error('servicio_id')
                        aria-describedby="error-title"
                        aria-invalid="true"
                    @enderror
                    value="{{old('servicio_id')}}"
                    >
                        @foreach ($servicios as $categoria)
                            <option value="{{$categoria->servicio_id}}"

                        @selected(old('categoria_id', $user->servicio_id ) == $categoria->servicio_id)>

                            {{$categoria->nombre}}
                            </option>
                        @endforeach
                    </select>
                        @error('servicio_id')
                        <p class="text-danger">
                            {{$message}}
                        </p>
                    @enderror

                </div>

            <button type="submit" class="btn btn-ennoia-update mt-5 py-2 px-5 mx-auto d-flex justify-content-center">Editar</button>
        </form>
    </div>

@endsection
