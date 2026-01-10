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
        Schema::create('cpus', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('nucleos');
            $table->integer('hilos');
            $table->string('frecuencia'); // GHz
            $table->foreignId('fuente_poder_id')->constrained('fuente_poders')->onDelete('cascade');
            $table->integer('ventiladores')->default(1);
            $table->foreignId('motherboard_id')->constrained('motherboards')->onDelete('cascade');
            $table->foreignId('gpu_id')->nullable()->constrained('gpus')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpus');
    }
};
