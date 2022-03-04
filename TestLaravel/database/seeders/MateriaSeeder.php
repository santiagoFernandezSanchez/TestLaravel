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

            'nivel_id'=>'1'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Matematicas',

            'nivel_id'=>'1'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Musica',

            'nivel_id'=>'2'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Geologia',

            'nivel_id'=>'2'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Biologia y Geologia',

            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Fisica y quimica',

            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Fisica y quimica',

            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Geologia',

            'nivel_id'=>'4'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Matematicas',

            'nivel_id'=>'4'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Filosofia',

            'nivel_id'=>'5'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Historia',

            'nivel_id'=>'6'
        ]);


    }
}
