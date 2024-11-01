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
        Schema::create('nota_compras', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->unsignedBigInteger('IdProveedor');
            $table->unsignedBigInteger('IdCajero');
            $table->decimal('precio_total', 12, 2);

            $table->foreign('IdProveedor')->references('id')->on('proveedors')
                ->onUpdate('cascade')
                ->onDelete('cascade');



            $table->foreign('IdCajero')->references('id')->on('cajeros')
                   ->onUpdate('cascade')
              ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_compras');
    }
};
