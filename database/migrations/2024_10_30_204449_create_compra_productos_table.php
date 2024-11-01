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
        Schema::create('compra_producto', function (Blueprint $table) {
            $table->unsignedBigInteger('compra_id'); // Clave foránea que apunta a compras
            $table->unsignedBigInteger('producto_id'); // Clave foránea que apunta a productos
            $table->integer('cantidad'); // Cantidad comprada de este producto
            $table->decimal('precio', 12, 2); // Precio de compra del producto en esta compra
            $table->timestamps(); // Columnas created_at y updated_at para fechas de creación y actualización

            // Definir las claves foráneas y las relaciones
            $table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');

            // Definir la clave primaria compuesta
            $table->primary(['compra_id', 'producto_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_producto');
    }
};
