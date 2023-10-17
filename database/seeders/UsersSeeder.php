<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'Ennoia',
                'email'=>'ennoia@gmail.com',
                'password'=>bcrypt('ennoia'),
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>2,
                'name'=>'Juan',
                'email'=>'juan@gmail.com',
                'password'=>bcrypt('juanlopez'),
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>3,
                'name'=>'Alex',
                'email'=>'alex@gmail.com',
                'password'=>bcrypt('alexquintana'),
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>4,
                'name'=>'sara za',
                'email'=>'saraza@gmail.com',
                'password'=>bcrypt('saraza'),
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
