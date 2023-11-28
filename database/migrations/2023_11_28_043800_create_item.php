<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id('iditem');
            $table->Integer('item');
            $table->integer('harga');
            $table->integer('promo');

            // Foreign key constraints
            $table->foreignid('idtypegame')->references('idtypegame')->on('typegame')->cascadeOnUpdate()->restrictOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
