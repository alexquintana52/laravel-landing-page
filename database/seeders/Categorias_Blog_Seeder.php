<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorias_Blog_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria_blog')->insert([
            [
                'categoria_id' => 1,
                'nombre' => 'Programación y Desarrollo',
                'descripcion' => 'Descubre las últimas tendencias en desarrollo web, aplicaciones móviles y programación. Aprende sobre lenguajes de programación, herramientas y entornos de desarrollo líderes en la industria',
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Redes y Comunicaciones',
                'descripcion' => 'Explora el mundo de las redes de computadoras y las comunicaciones. Aprende sobre las últimas tecnologías en redes, incluyendo Internet de las Cosas (IoT)',
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Sistemas Operativos',
                'descripcion' => 'Conoce los sistemas operativos más utilizados, como Windows, macOS, Linux, Android e iOS. Descubre consejos y trucos para aprovechar al máximo tu sistema operativo preferido.',
            ],
        ]);
    }
}
