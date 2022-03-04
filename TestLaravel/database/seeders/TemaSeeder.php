<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

// TEMAS BIOLOGÍA Y GEOLOGÍA 
       DB::table('temas')->insert([
        'numero' => '1',
        'nombre' => 'Bioelementos y biomoléculas inorgánicas',
        'materia_id' => '1'
       ]);

       DB::table('temas')->insert([
        'numero' => '2',
        'nombre' => 'Los glúcidos',
        'materia_id' => '1'
       ]);

       DB::table('temas')->insert([
        'numero' => '3',
        'nombre' => 'Los lípidos',
        'materia_id' => '1'
       ]);
    }
}
