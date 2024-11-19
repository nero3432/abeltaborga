<?php

namespace Database\Factories;

use App\Models\Paciente;  // Asegúrate de que el modelo Paciente esté importado
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),  // Genera un primer nombre aleatorio
            'apellido' => $this->faker->lastName(),  // Genera un apellido aleatorio
            'edad' => $this->faker->numberBetween(18, 100),  // Edad entre 18 y 100 años
            'diagnostico' => $this->faker->word(),  // Diagnóstico aleatorio (puedes personalizar esto)
            'area_derivada' => $this->faker->randomElement(['Cardiología', 'Neurología', 'Pediatría', 'Oncología']),  // Área médica aleatoria
            'descripcion' => $this->faker->sentence(5),  // Descripción breve (puedes ajustarlo según tus necesidades)
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
