<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }
    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_documento' => 'required|unique:personas,numero_documento',
            'nombres' => 'required',
            'apellidos' => 'required',
            'sexo' => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date',
            'celular' => 'required'
        ]);
        Persona::create($request->all());
        return redirect()->route('personas.index');
    }
    
}
