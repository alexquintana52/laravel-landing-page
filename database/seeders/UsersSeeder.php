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
                'rol'=>'admin',
                'created_at'=>now(),
                'updated_at'=>now(),
                'servicio_id'=>"1"
            ],
            [
                'id'=>2,
                'name'=>'Juan',
                'email'=>'juan@gmail.com',
                'password'=>bcrypt('juanlopez'),
                'rol'=>'admin',
                'created_at'=>now(),
                'updated_at'=>now(),
                'servicio_id'=>"3"
            ],
            [
                'id'=>3,
                'name'=>'Alex',
                'email'=>'alex@gmail.com',
                'password'=>bcrypt('alexquintana'),
                'rol'=>'admin',
                'created_at'=>now(),
                'updated_at'=>now(),
                'servicio_id'=>"3"
            ],
            [
                'id'=>4,
                'name'=>'sara za',
                'email'=>'saraza@gmail.com',
                'password'=>bcrypt('saraza'),
                'rol'=>'user',
                'created_at'=>now(),
                'updated_at'=>now(),
                'servicio_id'=>"1"
            ],
        ]);
    }
}
