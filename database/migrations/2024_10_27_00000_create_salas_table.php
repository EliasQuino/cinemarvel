<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id(); // Esto crea un campo 'id' como clave primaria autoincrementable
            $table->integer('Capacidad'); // Capacidad de la sala
            $table->integer('NroSala'); // Número de la sala
            $table->timestamps(); // Esto agregará campos 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salas');
    }
};
