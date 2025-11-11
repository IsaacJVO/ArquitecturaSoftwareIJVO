<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habitacion_id')->constrained('habitaciones');
            $table->foreignId('usuario_id')->constrained('users');
            $table->dateTime('fecha_reserva');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->enum('estado_reserva', ['confirmada', 'pendiente', 'cancelada'])->default('pendiente');
            $table->decimal('total_a_pagar', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
