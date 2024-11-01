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
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Idnota');
            $table->unsignedBigInteger('Idproducto');

            $table->integer('cantidad');
            $table->decimal('precio_compra', 12, 2);


            $table->foreign('Idnota')->references('id')->on('nota_compras')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->foreign('Idproducto')->references('id')->on('productos')
                ->onUpdate('cascade')
                ->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_compras');
    }
};
