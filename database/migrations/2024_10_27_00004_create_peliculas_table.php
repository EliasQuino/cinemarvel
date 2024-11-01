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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id(); // Crea un campo 'id' como clave primaria autoincrementable
            $table->string('Nombre', 150); // Campo 'Nombre' de tipo varchar con longitud máxima de 150
            $table->string('Clasificacion', 10); // Campo 'Clasificacion' de tipo varchar con longitud máxima de 10
            $table->time('Duracion'); // Campo 'Duracion' de tipo time
            $table->unsignedBigInteger('Idgenero')->nullable(); // Campo 'Idgenero' como clave foránea que puede ser nulo
            $table->string('DireccionPelicula', 450)->nullable();
            // Definir la clave foránea con acciones de actualización y eliminación
            $table->foreign('Idgenero')->references('id')->on('generos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps(); // Agrega los campos 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
