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
        Schema::create('data_team', function (Blueprint $table) {

            $table->id('id_team');
            $table->string('nama_team');
            $table->string('profesi_team');
            $table->string('foto_team');
            $table->string('fb_team');
            $table->string('ig_team');
            $table->string('tw_team');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_team');
    }
};
