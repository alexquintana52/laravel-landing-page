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
        Schema::create('pagos', function (Blueprint $table) {
            $table->tinyIncrements("pago_id");
            $table->string('collection_id', 256);
            $table->string('collection_status', 256); //estado de la colección
            $table->string('merchant_order_id', 256);
            $table->string('payment_type', 256);
            $table->string('preference_id', 256);
            $table->string('site_id', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
