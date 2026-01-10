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
        Schema::create('conexion_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('motherboard_puerto_id')->nullable()->constrained('motherboard_puertos')->onDelete('set null');
            $table->foreignId('gpu_puerto_id')->nullable()->constrained('gpu_puertos')->onDelete('set null');
            $table->foreignId('monitor_puerto_id')->constrained('monitor_puertos')->onDelete('cascade');
            $table->foreignId('cable_id')->nullable()->constrained('cables')->onDelete('set null');
            $table->foreignId('adaptador_id')->nullable()->constrained('adaptadors')->onDelete('set null');
            $table->enum('estado', ['activo', 'no_activo', 'baja'])->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conexion_videos');
    }
};
