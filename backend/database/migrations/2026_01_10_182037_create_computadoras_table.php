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
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_interno')->unique();
            $table->enum('estado', ['activo', 'no_activo', 'baja'])->default('activo');
            $table->date('fecha_asignacion')->nullable();
            $table->foreignId('persona_id')->nullable()->constrained('personas')->onDelete('set null');
            $table->string('case')->nullable();
            $table->foreignId('cpu_id')->constrained('cpus')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computadoras');
    }
};
