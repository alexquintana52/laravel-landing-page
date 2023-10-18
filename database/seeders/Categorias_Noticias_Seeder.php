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
                'nombre' => 'Actualizaciones de la Aplicación.',
                'descripcion' => 'Esta categoría está diseñada para informar a los usuarios sobre las últimas novedades y mejoras en tu aplicación.',
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Colaboraciones y Asociaciones',
                'descripcion' => 'En esta categoría, puedes destacar noticias sobre colaboraciones y alianzas estratégicas que tu empresa o aplicación haya establecido con expertos o empresas del sector tecnológico.',
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Educación Tecnológica',
                'descripcion' => 'Esta categoría se centra en contenidos relacionados con la educación y el aprendizaje de conceptos tecnológicos. ',
            ],
        ]);
    }
}
