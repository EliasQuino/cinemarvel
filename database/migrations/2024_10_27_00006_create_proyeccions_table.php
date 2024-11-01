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
        Schema::create('proyeccions', function (Blueprint $table) {
            $table->id();
            $table->string('Dia', 20);
            $table->time('HoraIni');
            $table->time('HoraFin');
            $table->unsignedBigInteger('IdSala');
            $table->unsignedBigInteger('IdFormato');
            $table->unsignedBigInteger('IdPeli');
            $table->unsignedBigInteger('IdLeng');

            // Definición de claves foráneas
            $table->foreign('IdSala')->references('id')->on('salas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('IdFormato')->references('id')->on('formatos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign(['IdPeli', 'IdLeng'])->references(['IdPelicula', 'IdLenguaje'])->on('pelicula_lenguajes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeccions');
    }
};
