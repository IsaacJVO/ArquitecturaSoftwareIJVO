<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoHabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            ['nombre' => 'Simple', 'descripcion' => 'Habitación individual', 'precio' => 80.00],
            ['nombre' => 'Doble', 'descripcion' => 'Habitación doble', 'precio' => 120.00],
            ['nombre' => 'Triple', 'descripcion' => 'Habitación triple', 'precio' => 150.00],
            ['nombre' => 'Matrimonio', 'descripcion' => 'Habitación matrimonial', 'precio' => 200.00],
        ];

        foreach ($tipos as $tipo) {
            \App\Models\TipoHabitacion::create($tipo);
        }
    }
}
