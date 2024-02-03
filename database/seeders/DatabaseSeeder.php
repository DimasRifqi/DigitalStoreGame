<?php

namespace Database\Seeders;

use App\Models\invoice_game;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        //User::factory(10)->create();
        $this->call(testimoni_data::class);
        $this->call(pengguna::class);
        $this->call(kritik_saran::class);
        $this->call(Type::class);
        $this->call(Item::class);
        $this->call(DataTeam::class);
        $this->call(PamfletSeeder::class);

    }
}
