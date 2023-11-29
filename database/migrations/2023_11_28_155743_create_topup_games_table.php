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
            $table->string('server');
            $table->timestamps();

            // Foreign key constraints
            $table->foreignid('idtypegame')->references('idtypegame')->on('type_games')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignid('iditem')->references('iditem')->on('item_games')->cascadeOnUpdate()->restrictOnDelete();

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
