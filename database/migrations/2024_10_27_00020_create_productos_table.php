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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Laravel crea un campo id como clave primaria autoincremental
            $table->string('Nombre', 40);
            $table->date('Fecha_Vencimiento');

            $table->decimal('Precio', 12, 2);
            $table->unsignedBigInteger('IdCategoria');


            $table->foreign('IdCategoria')->references('id')->on('categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');

                $table->integer('cantidad')->unsigned(); // Cantidad del producto, no permite negativos

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
