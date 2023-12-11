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
        Schema::create('servicios', function (Blueprint $table) {
            $table->tinyIncrements("servicio_id");
            $table->string('nombre', 128);
            $table->string('descripcion', 156);
            $table->string('img', 512)->nullable();
            $table->decimal('precio', 8, 2);
            $table->string('descripcion_img', 256)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
