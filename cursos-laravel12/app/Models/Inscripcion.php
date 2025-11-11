<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $fillable = ['curso_id', 'persona_id', 'fecha', 'monto'];
    protected $table = 'inscripciones';
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}