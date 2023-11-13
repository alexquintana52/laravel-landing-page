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
        Schema::create('noticias_x_genero', function (Blueprint $table) {
            $table->foreignId("noticia_id")->constrained("noticias", "id");
            $table->unsignedTinyInteger("genero_id");
            $table->foreign("genero_id")->references("genero_id")->on("generos");

            $table->primary(["noticia_id", "genero_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias_x_genero');
    }
};
