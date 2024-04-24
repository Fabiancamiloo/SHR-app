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
        Schema::create('_hoteles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ubicacion', 10);
            $table->string('numero_telefono')->nullable();
            $table->string('email_contacto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_hoteles');
    }
};
