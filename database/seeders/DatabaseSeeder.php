<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Corremos los seeders
     */
    public function run(): void
    {
        $this->call(ServiciosSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(Categorias_Blog_Seeder::class);
        $this->call(BlogSeeder::class);
        $this->call(Categorias_Noticias_Seeder::class);
        $this->call(NoticiasSeeder::class);

        //$this->call(serviciosSeeder::class);

        /*
        corremos los seeders con el comando:
        *php artisan db:seed


        */
    }
}
