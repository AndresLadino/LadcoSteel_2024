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
        Schema::create('produccion', function (Blueprint $table) {
            $table->id();
            $table->string('referencia');
            $table->string('titulo');
            $table->longText('descripcion');
            $table->enum('estado', ['Recibido', 'En producción', 'Finalizado', 'Entregado']);            
            $table->unsignedBigInteger('cliente_id'); // Campo para la relación con la tabla "cliente"
            $table->unsignedBigInteger('user_id');    // Campo para la relación con la tabla "user"
            $table->date('fecha_estado_Recibido')->nullable()->useCurrent();
            $table->date('fecha_estado_Produccion')->nullable()->useCurrent();
            $table->date('fecha_estado_Finalizado')->nullable()->useCurrent();
            $table->date('fecha_estado_Entregado')->nullable()->useCurrent();
            $table->timestamps();
            


            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produccion');
    }
};
