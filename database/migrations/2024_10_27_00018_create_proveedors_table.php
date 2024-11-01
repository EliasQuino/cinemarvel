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
        Schema::create('proveedors', function (Blueprint $table) {


            $table->id(); // ID del proveedor
            $table->string('nombre'); // Nombre del proveedor
            $table->string('telefono')->nullable(); // Número de teléfono
            $table->string('email')->unique(); // Correo electrónico
            $table->timestamps(); // Marca de tiempo para created_at y updated_at


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
