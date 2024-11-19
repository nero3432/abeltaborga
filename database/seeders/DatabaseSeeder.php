<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PacientesTableSeeder::class, // Solo se llama al Seeder de pacientes
        ]);
    }
}
