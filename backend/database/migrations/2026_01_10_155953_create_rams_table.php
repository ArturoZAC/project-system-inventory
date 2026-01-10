<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rams', function (Blueprint $table) {
            $table->id(); // ID
            $table->string('marca'); // Marca
            $table->string('modelo'); // Modelo
            $table->integer('capacidad'); // Capacidad en GB
            $table->string('tipo'); // Tipo (DDR4, DDR5, etc.)
            $table->enum('estado', ['activo', 'no_activo', 'baja'])->default('activo');
            $table->foreignId('cpu_id')->nullable()->constrained('cpus')->nullOnDelete(); // Relación con CPU
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rams');
    }
};
