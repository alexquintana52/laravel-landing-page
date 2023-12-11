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
<<<<<<< HEAD
                "nombre"=>"Servicio Basico",
                "descripcion"=>"Acceso completo a los módulos, Unidades y lecciones esenciales de aprendizaje",
=======
                "nombre"=>"Servicio 1",
                "descripcion"=>"Descripcion del servicio 1",
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
                "img"=>"imagagenServicios/jXx1mmOWjaAQ2wDZOPLtxPJ1MUahNqgHNKqUDYHM.jpg",
                "descripcion_img"=>"imagen del servicio 1",
                "precio"=>"2500",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "servicio_id"=>"2",
<<<<<<< HEAD
                "nombre"=>"Servicio estándar",
                "descripcion"=>"Accede a actividades interactivas adicionales para reforzar lo aprendido.",
=======
                "nombre"=>"Servicio 2",
                "descripcion"=>"Descripcion del servicio 2",
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
                "img"=>"imagagenServicios/dDVT7ySsmM7j747FJkYIx9xsG7lG7RxlQ77qrlUz.jpg",
                "descripcion_img"=>"imagen del servicio 2",
                "precio"=>"5000",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "servicio_id"=>"3",
<<<<<<< HEAD
                "nombre"=>"Servicio full",
                "descripcion"=>"Acceso ilimitado a todos los módulos, unidades y lecciones disponibles en la aplicación.",
=======
                "nombre"=>"Servicio 3",
                "descripcion"=>"Descripcion del servicio 3",
>>>>>>> 70a1624e6935e4f9b098435ff3cc3c52dfc745d5
                "img"=>"imagagenServicios/Z6J3S3k7zDiXbWYXUvRVmtSyfhy1yZTrRyJmb9zb.jpg",
                "descripcion_img"=>"imagen del servicio 3",
                "precio"=>"10000",
                "created_at"=> now(),
                "updated_at"=> now()
            ]
            ]);
    }
}
