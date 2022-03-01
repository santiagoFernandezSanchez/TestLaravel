<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('nivels')->insert([
            'nombre'=>'1ºESO'
        ]);

        DB::table('nivels')->insert([
            'nombre'=>'2ºESO'
        ]);

        DB::table('nivels')->insert([
            'nombre'=>'3ºESO'
        ]);

        DB::table('nivels')->insert([
            'nombre'=>'4ºESO'
        ]);

        DB::table('nivels')->insert([
            'nombre'=>'1ºBACH'
        ]);

        DB::table('nivels')->insert([
            'nombre'=>'2ºBACH'
        ]);
    }
}
