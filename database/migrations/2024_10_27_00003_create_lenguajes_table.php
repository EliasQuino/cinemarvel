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
        Schema::create('lenguajes', function (Blueprint $table) {
            $table->id(); // Crea un campo 'id' como clave primaria autoincrementable
            $table->string('Idioma', 40); // Campo 'Idioma' de tipo varchar con longitud máxima de 40
            $table->string('Subtitulo', 15)->nullable(); // Campo 'Subtitulo' de tipo varchar con longitud máxima de 15, permitiendo valores nulos
            $table->timestamps(); // Agrega los campos 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lenguajes');
    }
};
