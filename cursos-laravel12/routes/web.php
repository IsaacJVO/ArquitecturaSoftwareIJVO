<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProfileController;
use Faker\Provider\ar_EG\Person;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
return view('welcome');
});
Route::middleware(['auth'])->group(function () {
Route::resource('cursos', CursoController::class);
Route::resource('personas', PersonaController::class);
Route::resource('inscripciones', InscripcionController::class);
});

require __DIR__.'/auth.php';





