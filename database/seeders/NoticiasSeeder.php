<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'id'=>1,
                'titulo'=>'Desarrollo de software a medida',
                'noticia'=>'Ennoia es una empresa de desarrollo de software que se especializa en el desarrollo de aplicaciones web y móviles, así como en el desarrollo de software a medida. Nuestro equipo de desarrolladores de software está formado por profesionales con más de 10 años de experiencia en el sector. Nuestro objetivo es ayudar a las empresas a mejorar sus procesos de negocio mediante el desarrollo de software a medida. Nuestro equipo de desarrolladores de software está formado por profesionales con más de 10 años de experiencia en el sector. Nuestro objetivo es ayudar a las empresas a mejorar sus procesos de negocio mediante el desarrollo de software a medida.',
                'funcionalidades'=>'Desarrollo de software a medida',
                'categoria'=>'Desarrollo de software',
                'img'=>'https://www.ennoia.com/wp-content/uploads/2021/09/Desarrollo-de-software-a-medida-1.jpg',
                'descripcion_img'=>'una_imagen',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>2,
                'titulo'=>'Desarrollo de software a medida',
                'noticia'=> 'Ennoia es una empresa de desarrollo de software que se especializa en el desarrollo de aplicaciones web y móviles, así como en el desarrollo de software a medida. Nuestro equipo de desarrolladores de software está formado por profesionales con más de 10 años de experiencia en el sector. Nuestro objetivo es ayudar a las empresas a mejorar sus procesos de negocio mediante el desarrollo de software a medida. Nuestro equipo de desarrolladores de software está formado por profesionales con más de 10 años de experiencia en el sector. Nuestro objetivo es ayudar a las empresas a mejorar sus procesos de negocio mediante el desarrollo de software a medida.',
                'funcionalidades'=>'Desarrollo de software a medida',
                'categoria'=>'Desarrollo de software',
                'img'=>'https://www.ennoia.com/wp-content/uploads/2021/09/Desarrollo-de-software-a-medida-1.jpg',
                'descripcion_img'=>'una_imagen',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>3,
                'titulo'=>'Desarrollo de software a medida',
                'noticia'=>'Ennoia es una empresa de desarrollo de software que se especializa en el desarrollo de aplicaciones web y móviles, así como en el desarrollo de software a medida. Nuestro equipo de desarrolladores de software está formado por profesionales con más de 10 años de experiencia en el sector. Nuestro objetivo es ayudar a las empresas a mejorar sus procesos de negocio mediante el desarrollo de software a medida. Nuestro equipo de desarrolladores de software está formado por profesionales con más de 10 años de experiencia en el sector. Nuestro objetivo es ayudar a las empresas a mejorar sus procesos de negocio mediante el desarrollo de software a medida.',
                'funcionalidades'=>'Desarrollo de software a medida',
                'categoria'=>'Desarrollo de software',
                'img'=>'https://www.ennoia.com/wp-content/uploads/2021/09/Desarrollo-de-software-a-medida-1.jpg',
                'descripcion_img'=>'una_imagen',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
