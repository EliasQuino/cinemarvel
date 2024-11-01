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
        Schema::create('formatos', function (Blueprint $table) {
            $table->id(); // Esto crea un campo 'id' como clave primaria autoincrementable
            $table->string('Descripcion', 60); // Descripción del formato, hasta 60 caracteres
            $table->decimal('precio', 12, 2); // Precio del formato, con hasta 12 dígitos en total y 2 decimales
            $table->timestamps(); // Esto agregará campos 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formatos');
    }
};
