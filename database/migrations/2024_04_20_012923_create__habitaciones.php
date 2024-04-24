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
        Schema::create('_habitaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->string('numero');
            $table->string('tipo', 10);
            $table->decimal('precio_por_noche', 10, 2);
            $table->timestamps();
       
            $table->foreign('hotel_id')->references('id')->on('hoteles');
     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_habitaciones');
    }
};
