<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(NivelSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TemaSeeder::class);
        $this->call(PreguntaSeeder::class);
    }
}
