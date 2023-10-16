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
        $this->call(BlogSeeder::class);
        $this->call(NoticiasSeeder::class);
        $this->call(UsersSeeder::class);

        //$this->call(serviciosSeeder::class);

        /*
        corremos los seeders con el comando:
        *php artisan db:seed


        */
    }
}
