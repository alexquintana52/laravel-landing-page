<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            [
                "servicio_id"=>"1",
                "nombre"=>"Servicio 1",
                "descripcion"=>"Descripcion del servicio 1",
                "img"=>"imagenServicios/1.jpg",
                "descripcion_img"=>"imagen del servicio 1",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "servicio_id"=>"2",
                "nombre"=>"Servicio 2",
                "descripcion"=>"Descripcion del servicio 2",
                "img"=>"imagenServicios/2.jpg",
                "descripcion_img"=>"imagen del servicio 2",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "servicio_id"=>"3",
                "nombre"=>"Servicio 3",
                "descripcion"=>"Descripcion del servicio 3",
                "img"=>"imagenServicios/3.jpg",
                "descripcion_img"=>"imagen del servicio 3",
                "created_at"=> now(),
                "updated_at"=> now()
            ]
            ]);
    }
}
