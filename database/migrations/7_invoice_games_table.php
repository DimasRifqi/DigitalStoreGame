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
        Schema::create('invoice_games', function (Blueprint $table) {

            $table->id('id_invoice');
            $table->string('nama_pembeli')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('kodepembayaran_invoice')->unique;
            $table->string('nama_game')->references('id_typegame')->on('type_games')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('game_id');
            $table->string('server_game')->nullable();
            $table->string('item_game')->references('id_item')->on('item_games')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('hargaitem_game')->references('id_item')->on('item_games')->cascadeOnUpdate()->restrictOnDelete();
            //$table->string('lunas')->default(false);
            $table->enum('status',['Belum Lunas','Lunas'])->default('Belum Lunas');
            $table->foreignid('id_user')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_games');
    }
};
