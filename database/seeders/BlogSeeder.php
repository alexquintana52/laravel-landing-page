<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([
            [
                'id'=>1,
                'titulo'=>'Aprende Tecnología Jugando: Descubre Nuestra Aplicación Educativa',
                'noticia'=>'La tecnología es una parte fundamental de nuestras vidas, pero a menudo, aprender sobre ella puede resultar abrumador y desafiante. ¿Y si te dijéramos que existe una forma divertida y accesible de aprender los conceptos de tecnología? Bienvenido a nuestra aplicación educativa que te ofrece precisamente eso: aprender tecnología jugando.',
                'categoria_id'=>'1',
                'img'=>'imagagenBlog/SfRTj4w7t7dxA0hj7SXGyX6CejB85mEucNd3stkd.jpg',
                'descripcion_img'=>'portada_entrada_blog',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>2,
                'titulo'=>'Los Beneficios de Aprender Tecnología Jugando',
                'noticia'=>'¿Sabías que aprender tecnología puede ser divertido? ¡Sí, lo has oído bien! En lugar de aburridas clases magistrales y manuales extensos, puedes adentrarte en el mundo de la tecnología a través de juegos emocionantes y desafiantes. En esta entrada de blog, exploraremos los beneficios de aprender tecnología jugando y cómo esta innovadora metodología puede cambiar tu forma de aprender.',
                'categoria_id'=>'2',
                'img'=>'imagagenBlog/aYmU3P3OuNY0wAlFbr8euyrDxZDr9Q3RXpheUom3.jpg',
                'descripcion_img'=>'portada_entrada_blog',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>3,
                'titulo'=>'Los Conceptos de Tecnología que Puedes Aprender con Ennoia',
                'noticia'=>'La tecnología está en constante evolución, y aprender sus conceptos puede parecer una tarea abrumadora. Pero, ¿qué pasa si te decimos que puedes sumergirte en el mundo de la tecnología a través de juegos retro? En esta entrada de blog, exploraremos algunos de los emocionantes conceptos de tecnología que puedes aprender utilizando nuestra aplicación y cómo estos conocimientos pueden impulsar tu comprensión tecnológica.',
                'categoria_id'=>'3',
                'img'=>'imagagenBlog/MhIEioZ69xWFdLnXtmiKcxhrpCyDRW9geDnI0cvi.jpg',
                'descripcion_img'=>'portada_entrada_blog',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
