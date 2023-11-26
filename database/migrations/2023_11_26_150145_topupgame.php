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
        Schema::create('topupGame', function (Blueprint $table) {
            $table->id('idtopup');
            $table->unsignedBigInteger('idtypegame');
            $table->unsignedBigInteger('iditem');
            $table->string('server');

            // Foreign key constraints
            //$table->foreign('idtypegame')->references('id')->on('typegame')->onDelete('cascade');
            //$table->foreign('iditem')->references('id')->on('item')->onDelete('cascade');

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
