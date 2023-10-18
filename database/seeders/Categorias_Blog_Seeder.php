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
                'nombre' => 'Educación Tecnológica',
                'descripcion' => 'Esta categoría puede abarcar todos los artículos relacionados con la enseñanza y el aprendizaje de la tecnología, ya que se centran en la aplicación educativa.',
            ],
            [
                'categoria_id' => 2,
                'nombre' => ' Aprendizaje Lúdico',
                'descripcion' => 'Esta categoría es ideal para artículos que destacan cómo el aprendizaje a través de juegos puede ser beneficioso y atractivo.',
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Conceptos Tecnológicos',
                'descripcion' => ' Los artículos que se centran en los conceptos de tecnología específicos que se enseñan en la aplicación pueden categorizarse aquí.',
            ],
        ]);
    }
}
