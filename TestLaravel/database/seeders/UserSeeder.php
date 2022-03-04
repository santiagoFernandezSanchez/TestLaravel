<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'name'=>'1ºESO:Biologia y Geologia',
            'email'=>'1eso.biologia.geologia@gmail.com',
            'password'=>bcrypt('1ESOBiologiayGeologia'),
            'rol'=>'profesor',
            'materia_id'=>1
        ]);
        DB::table('users')->insert([
            'name'=>'1ºESO:Matematicas',
            'email'=>'1eso.matematicas@gmail.com',
            'password'=>bcrypt('1ESOMatematicas'),
            'rol'=>'profesor',
            'materia_id'=>2
        ]);

        DB::table('users')->insert([
            'name'=>'2ºESO:Musica',
            'email'=>'2eso.musica@gmail.com',
            'password'=>bcrypt('2ESOMusica'),
            'rol'=>'profesor',
            'materia_id'=>3
        ]);
        DB::table('users')->insert([
            'name'=>'2ºESO:Geologia',
            'email'=>'2eso.geologia@gmail.com',
            'password'=>bcrypt('2ESOGeologia'),
            'rol'=>'profesor',
            'materia_id'=>4
        ]);
        DB::table('users')->insert([
            'name'=>'3ºESO:Biologia y Geologia',
            'email'=>'3eso.biologia.geologia@gmail.com',
            'password'=>bcrypt('3ESOBiologiayGeologia'),
            'rol'=>'profesor',
            'materia_id'=>5
        ]);
        DB::table('users')->insert([
            'name'=>'3ºESO:Fisica y Quimica',
            'email'=>'3eso.fisica.quimica@gmail.com',
            'password'=>bcrypt('3ESOFisicayQuimica'),
            'rol'=>'profesor',
            'materia_id'=>6
        ]);

        DB::table('users')->insert([
            'name'=>'4ºESO:Geologia',
            'email'=>'4eso.geologia@gmail.com',
            'password'=>bcrypt('4ESOGeologia'),
            'rol'=>'profesor',
            'materia_id'=>7
        ]);
        DB::table('users')->insert([
            'name'=>'4ºESO:Matematicas',
            'email'=>'4eso.matematicas@gmail.com',
            'password'=>bcrypt('4ESOMatematicas'),
            'rol'=>'profesor',
            'materia_id'=>8
        ]);
        DB::table('users')->insert([
            'name'=>'1ºBACH:Filosofia',
            'email'=>'1bach.filosofia@gmail.com',
            'password'=>bcrypt('1BACHFilosofia'),
            'rol'=>'profesor',
            'materia_id'=>9
        ]);

        DB::table('users')->insert([
            'name'=>'2ºBACH:Historia',
            'email'=>'2bach.historia@gmail.com',
            'password'=>bcrypt('2BACHHistoria'),
            'rol'=>'profesor',
            'materia_id'=>10
        ]);
        DB::table('users')->insert([
            'name'=>'admim',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
            'rol'=>'admin'
        ]);

    }
}
