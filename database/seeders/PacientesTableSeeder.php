<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'edad' => 34,
                'diagnostico' => 'Hipertensión',
                'area_derivada' => 'Cardiología',
                'descripcion' => 'Paciente con antecedentes de hipertensión arterial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Gómez',
                'edad' => 45,
                'diagnostico' => 'Diabetes tipo 2',
                'area_derivada' => 'Endocrinología',
                'descripcion' => 'Paciente con diabetes desde hace 5 años, en tratamiento.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'López',
                'edad' => 58,
                'diagnostico' => 'Artritis reumatoide',
                'area_derivada' => 'Reumatología',
                'descripcion' => 'Paciente con dolor articular crónico.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más pacientes aquí según sea necesario
        ]);
    }
}
