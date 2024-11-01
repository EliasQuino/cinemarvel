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
        Schema::create('pelicula_lenguajes', function (Blueprint $table) {
            $table->unsignedBigInteger('IdPelicula');
            $table->unsignedBigInteger('IdLenguaje');

 // Clave primaria compuesta
 $table->primary(['IdPelicula', 'IdLenguaje']);


            // Definición de claves foráneas
            $table->foreign('IdPelicula')->references('id')->on('peliculas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('IdLenguaje')->references('id')->on('lenguajes')
                ->onUpdate('cascade')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelicula_lenguajes');
    }
};
