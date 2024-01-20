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
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("ubicacion");
            $table->string("telefono");
            $table->string("email");
            $table->string("personaContacto");
            $table->unsignedInteger("anyoFundacion");
            $table->text("descripcion");
            $table->boolean("restaurante");
            $table->boolean("hotel");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodegas');
    }
};
