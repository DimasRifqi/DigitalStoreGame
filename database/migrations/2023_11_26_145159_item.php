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
        Schema::create('item', function (Blueprint $table) {
            $table->id('iditem');
            $table->Integer('item');
            $table->integer('harga');
            $table->integer('promo');
            $table->unsignedBigInteger('idtypegame');

            // Foreign key constraints
            //$table->foreign('idtypegame')->references('idtypegame')->on('typegame')->onDelete('cascade');
            //$table->foreignId('idtypegame')->constrained('typegame')->onDelete('cascade');
            //$table->foreign('idtypegame')->references('idtypegame')->on('typegame')->onDelete('cascade');

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
