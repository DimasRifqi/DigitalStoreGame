<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('topupGame', function (Blueprint $table) {
            $table->id('idtopup');
            $table->string('server');

            // Foreign key constraints
            $table->foreignid('idtypegame')->references('idtypegame')->on('typegame')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignid('iditem')->references('iditem')->on('item')->cascadeOnUpdate()->restrictOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topupGame');
    }
};
