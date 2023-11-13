<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert([
            [
                "genero_id"=> 1,
                "nombre"=> "Tecnologia",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "genero_id"=> 2,
                "nombre"=> "Novedades",
                "created_at"=> now(),
                "updated_at"=> now()
            ]
        ]);
    }
}

