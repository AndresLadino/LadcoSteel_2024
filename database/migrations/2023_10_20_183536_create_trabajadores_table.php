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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_1');
            $table->string('nombre_2');
            $table->string('apellido_1');
            $table->string('apellido_2');
            $table->string('cedula');
            $table->string('cargo');
            $table->string('contrato');
            $table->date('fecha_ingreso');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('barrio');
            $table->string('localidad');
            $table->string('eps')->nullable();
            $table->string('fondo_pensiones')->nullable();
            $table->string('nombre_emergencia_1')->nullable();
            $table->string('telefono_emergencia_1')->nullable();
            $table->string('parentezco_1')->nullable();
            $table->string('nombre_emergencia_2')->nullable();
            $table->string('telefono_emergencia_2')->nullable();
            $table->string('parentezco_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
