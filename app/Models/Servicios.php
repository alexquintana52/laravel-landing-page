<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    //use HasFactory;
    protected $table = "servicios";
    protected $primaryKey = "servicio_id";

    protected $fillable = [
        'nombre',
        'descripcion',
        'img',
        'descripcion_img',
        'precio'

    ];

    public static $reglas = [
        'nombre' => 'required|min : 5|max : 100',
        'descripcion' => 'required|min : 5|max : 1000',
        'img' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'descripcion_img' => 'required|min : 5|max : 1000',
        'precio' => 'required|numeric'
    ];

    public static $mensajesdeError = [
        'nombre.required' => 'El campo nombre es obligatorio',
        'nombre.min' => 'El campo nombre debe tener al menos 5 caracteres',
        'nombre.max' => 'El campo nombre debe tener como maximo 100 caracteres',
        'descripcion.required' => 'El campo descripcion es obligatorio',
        'descripcion.min' => 'El campo descripcion debe tener al menos 5 caracteres',
        'descripcion.max' => 'El campo descripcion debe tener como maximo 1000 caracteres',
        'img.image' => 'El campo imagen debe ser una imagen',
        'img.mimes' => 'El campo imagen debe ser un archivo de tipo: jpeg, png, jpg, gif, svg.',
        'img.max' => 'El campo imagen debe tener como maximo 2048 caracteres',
        'descripcion_img.required' => 'El campo descripcion de la imagen es obligatorio',
        'descripcion_img.min' => 'El campo descripcion de la imagen debe tener al menos 5 caracteres',
        'descripcion_img.max' => 'El campo descripcion de la imagen debe tener como maximo 1000 caracteres',
        'precio.required' => 'El campo precio es obligatorio',
    ];
}
