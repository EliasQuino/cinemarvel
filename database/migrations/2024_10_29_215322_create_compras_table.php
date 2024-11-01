<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id'); // Clave primaria
            $table->unsignedBigInteger('proveedor_id'); // Clave foránea que apunta a proveedores
            $table->unsignedBigInteger('IdCajero'); // Clave foránea que apunta a cajeros
           // $table->timestamp('fecha')->useCurrent(); // Fecha de la compra con valor actual por defecto
           $table->date('fecha');


           $table->decimal('precio_total', 12, 2); // Precio total de la compra
            $table->timestamps(); // Columnas created_at y updated_at

            // Definir claves foráneas
            $table->foreign('proveedor_id')->references('id')->on('proveedors')->onDelete('cascade');
           $table->foreign('IdCajero')->references('id')->on('cajeros')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
};

