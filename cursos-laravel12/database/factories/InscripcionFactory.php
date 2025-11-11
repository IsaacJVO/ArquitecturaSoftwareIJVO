<?php

namespace Database\Factories;

use App\Models\Inscripcion;
use App\Models\Curso;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscripcionFactory extends Factory
{
    // Indica explícitamente a qué modelo pertenece esta factory
    protected $model = Inscripcion::class;

    public function definition(): array
    {
        return [
            'curso_id' => Curso::inRandomOrder()->first()->id,
            'persona_id' => Persona::inRandomOrder()->first()->id,
            'fecha' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'monto' => $this->faker->randomFloat(2, 50, 1000),
        ];
    }
}
