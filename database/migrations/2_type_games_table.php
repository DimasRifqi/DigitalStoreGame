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
        Schema::create('type_games', function (Blueprint $table) {
            $table->id('id_typegame');
            $table->string('foto_game');
            $table->string('tipegame');
            $table->string('namagame');
            $table->string('linkgame');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_games');
    }
};
