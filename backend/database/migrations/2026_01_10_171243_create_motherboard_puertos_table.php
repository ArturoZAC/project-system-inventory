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
        Schema::create('motherboard_puertos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('motherboard_id')->constrained('motherboards')->onDelete('cascade');
            $table->string('tipo_puerto'); // HDMI, VGA, DisplayPort, etc.
            $table->enum('estado', ['activo', 'no_activo', 'baja'])->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motherboard_puertos');
    }
};
