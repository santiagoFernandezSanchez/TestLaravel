<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('materias')->insert([
            'nombre'=>'Biologia y Geologia',
            'user_id'=>'1',
            'nivel_id'=>'1'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Matematicas',
            'user_id'=>'2',
            'nivel_id'=>'1'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Musica',
            'user_id'=>'3',
            'nivel_id'=>'2'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Geologia',
            'user_id'=>'4',
            'nivel_id'=>'2'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Biologia y Geologia',
            'user_id'=>'5',
            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Fisica y quimica',
            'user_id'=>'6',
            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Fisica y quimica',
            'user_id'=>'6',
            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Geologia',
            'user_id'=>'7',
            'nivel_id'=>'4'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Matematicas',
            'user_id'=>'8',
            'nivel_id'=>'4'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Filosofia',
            'user_id'=>'9',
            'nivel_id'=>'5'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Historia',
            'user_id'=>'10',
            'nivel_id'=>'6'
        ]);


    }
}
