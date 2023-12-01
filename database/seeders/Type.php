<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\type_game;

class Type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tipe game
        $datatipe_game = [
            [
                'tipegame' => 'Mobile/PC',
                'namagame' => 'Genshin Impact'
            ],

            [
                'tipegame' => 'Mobile/PC',
                'namagame' => 'Honkai Stair Rail'
            ],

            [
                'tipegame' => 'Mobile',
                'namagame' => 'Mobile Legend'
            ],

            [
                'tipegame' => 'Mobile/PC',
                'namagame' => 'Tower of Fantasy'
            ],

        ];

        foreach ($datatipe_game as $data) {
            type_game::create($data);
        }
    }
}
