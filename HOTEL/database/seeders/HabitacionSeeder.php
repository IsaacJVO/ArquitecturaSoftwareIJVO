<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = \App\Models\TipoHabitacion::all();

        // 10 habitaciones simples
        for ($i = 1; $i <= 10; $i++) {
            \App\Models\Habitacion::create([
                'numero_habitacion' => '10' . $i,
                'tipo_habitacion_id' => $tipos->where('nombre', 'Simple')->first()->id,
                'precio_por_noche' => 80.00,
                'estado' => 'disponible',
                'descripcion' => 'Habitación individual estándar',
            ]);
        }

        // 5 habitaciones dobles
        for ($i = 1; $i <= 5; $i++) {
            \App\Models\Habitacion::create([
                'numero_habitacion' => '20' . $i,
                'tipo_habitacion_id' => $tipos->where('nombre', 'Doble')->first()->id,
                'precio_por_noche' => 120.00,
                'estado' => 'disponible',
                'descripcion' => 'Habitación doble estándar',
            ]);
        }

        // 5 habitaciones triples
        for ($i = 1; $i <= 5; $i++) {
            \App\Models\Habitacion::create([
                'numero_habitacion' => '30' . $i,
                'tipo_habitacion_id' => $tipos->where('nombre', 'Triple')->first()->id,
                'precio_por_noche' => 150.00,
                'estado' => 'disponible',
                'descripcion' => 'Habitación triple familiar',
            ]);
        }

        // 8 habitaciones matrimoniales
        for ($i = 1; $i <= 8; $i++) {
            \App\Models\Habitacion::create([
                'numero_habitacion' => '40' . $i,
                'tipo_habitacion_id' => $tipos->where('nombre', 'Matrimonio')->first()->id,
                'precio_por_noche' => 200.00,
                'estado' => 'disponible',
                'descripcion' => 'Habitación matrimonial con cama king size',
            ]);
        }
    }
}
