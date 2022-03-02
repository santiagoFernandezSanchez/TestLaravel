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
            'profesor_id'=>'1',
            'nivel_id'=>'1'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Matematicas',
            'profesor_id'=>'2',
            'nivel_id'=>'1'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Musica',
            'profesor_id'=>'3',
            'nivel_id'=>'2'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Geologia',
            'profesor_id'=>'4',
            'nivel_id'=>'2'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Biologia y Geologia',
            'profesor_id'=>'5',
            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Fisica y quimica',
            'profesor_id'=>'6',
            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Fisica y quimica',
            'profesor_id'=>'6',
            'nivel_id'=>'3'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Geologia',
            'profesor_id'=>'7',
            'nivel_id'=>'4'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Matematicas',
            'profesor_id'=>'8',
            'nivel_id'=>'4'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Filosofia',
            'profesor_id'=>'9',
            'nivel_id'=>'5'
        ]);

        DB::table('materias')->insert([
            'nombre'=>'Historia',
            'profesor_id'=>'10',
            'nivel_id'=>'6'
        ]);


    }
}
