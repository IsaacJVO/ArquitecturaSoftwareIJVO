<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habitacion>
 */
class HabitacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_habitacion' => $this->faker->unique()->numberBetween(100, 999),
            'tipo_habitacion_id' => \App\Models\TipoHabitacion::factory(),
            'precio_por_noche' => $this->faker->randomFloat(2, 50, 300),
            'estado' => $this->faker->randomElement(['disponible', 'ocupada', 'mantenimiento']),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
