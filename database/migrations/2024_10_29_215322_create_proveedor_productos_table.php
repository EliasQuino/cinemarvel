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
        Schema::create('proveedor_productos', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->unsignedBigInteger('IdProveedor');
            $table->unsignedBigInteger('IdProducto');
            $table->integer('cantidad');
            $table->decimal('precio_compra', 12, 2);
            $table->decimal('precio_total', 12, 2);

            // Clave primaria compuesta
           /// $table->primary(['IdProveedor', 'IdProducto']);

            // Definición de claves foráneas
            $table->foreign('IdProveedor')->references('id')->on('proveedors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('IdProducto')->references('id')->on('productos')
                ->onUpdate('cascade')
                ->onDelete('cascade');


             ///  $table->unsignedBigInteger('IdCajero');
           ///    $table->foreign('IdCajero')->references('id')->on('cajeros')
              ///     ->onUpdate('cascade')
                 ///  ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor_productos');
    }
};
