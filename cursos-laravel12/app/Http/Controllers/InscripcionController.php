<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{

    public function index()
    {
        $inscripciones = Inscripcion::all();
        return view('inscripciones.index', compact('inscripciones'));
    }
    public function create()
    {
        return view('inscripciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'precio' => 'required|numeric'
        ]);
        Curso::create($request->all());
        return redirect()->route('cursos.index');
    }
}
