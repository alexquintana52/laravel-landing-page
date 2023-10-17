<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorias_Noticias_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria_noticias')->insert([
            [
                'categoria_id' => 1,
                'nombre' => 'Tutoriales y Guías',
                'descripcion' => 'Recursos informativos para los usuarios',
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Cómo Usar la Aplicación',
                'descripcion' => 'Consejos sobre cómo utilizar nuestra aplicación',
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Nuevas Características',
                'descripcion' => 'Información sobre las últimas características de la aplicación',
            ],
        ]);
    }
}
