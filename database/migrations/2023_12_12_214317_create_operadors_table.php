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
        Schema::create('operadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('direccion',250);
            $table->string('telefono',50);
            $table->string('edad',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operadores');
    }
};
