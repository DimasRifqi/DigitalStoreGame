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
        Schema::create('item_games', function (Blueprint $table) {
            $table->id('id_item');
            $table->string('foto_item');
            $table->string('item');
            $table->integer('harga');
            $table->integer('promo');
            $table->foreignid('id_typegame')->references('id_typegame')->on('type_games')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_games');
    }
};
