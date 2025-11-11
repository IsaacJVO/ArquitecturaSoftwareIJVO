<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = 'habitaciones';

    protected $fillable = [
        'numero_habitacion',
        'tipo_habitacion_id',
        'precio_por_noche',
        'estado',
        'descripcion'
    ];

    protected $casts = [
        'precio_por_noche' => 'decimal:2',
    ];

    public function tipoHabitacion()
    {
        return $this->belongsTo(TipoHabitacion::class);
    }
}