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
        Schema::create('reservations_hotel_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario')->nullable();
            $table->string('documento_usuario')->unique()->nullable();
            $table->string('fecha_reservacion')->nullable();
            $table->string('cuarto_reservacion')->nullable();
            // Disponible, no disponible, usaré 1 para disponible, 0 para no disponible
            $table->string('disponibilidad')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_hotel_rooms');
    }
};
