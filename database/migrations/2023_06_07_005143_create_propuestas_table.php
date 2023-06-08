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
        Schema::create('propuestas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->date('fecha')->nullable();
            $table->string('documento',100);
            $table->tinyInteger('estado');

            $table->string('estudiante_rut');
            $table->foreign('estudiante_rut')->references('rut')->on('estudiantes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};