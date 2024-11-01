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
        Schema::create('butacas', function (Blueprint $table) {
            $table->bigInteger('Id')->unsigned();
            $table->char('Estado', 1);
            $table->unsignedBigInteger('IdFila');
            $table->unsignedBigInteger('IdColumna');
            $table->unsignedBigInteger('IdSala');


            // Definir la clave primaria compuesta
            $table->primary(['Id', 'IdSala']);


            // Definir las claves foráneas
            $table->foreign('IdFila')->references('id')->on('filas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('IdColumna')->references('id')->on('columnas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('IdSala')->references('id')->on('salas')
                ->onUpdate('cascade')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('butacas');
    }
};
