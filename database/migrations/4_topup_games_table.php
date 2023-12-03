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
        Schema::create('topup_games', function (Blueprint $table) {
            $table->id('idtopup');
            $table->integer('game_id');
            $table->string('server');
            $table->timestamps();

            // Foreign key constraints
            $table->foreignid('id_typegame')->references('id_typegame')->on('type_games')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignid('id_item')->references('id_item')->on('item_games')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignid('id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topup_games');
    }
};
