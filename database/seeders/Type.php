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
                'foto_game' => 'img/GITopUp/genshin.png',
                'tipegame' => 'Mobile/PC',
                'namagame' => 'Genshin Impact',
                'linkgame' => "{{ route('topupGI') }}"
            ],

            [
                'foto_game' => 'img/HSRTopUp/hsr.png',
                'tipegame' => 'Mobile/PC',
                'namagame' => 'Honkai Stair Rail',
                'linkgame' => "{{ route('topupHSR') }}"
            ],

            [
                'foto_game' => 'img/MLTopUp/ml.png',
                'tipegame' => 'Mobile',
                'namagame' => 'Mobile Legend',
                'linkgame' => "{{ route('topupML') }}"
            ],

            [
                'foto_game' => 'img/TOFTopUp/logoTOF.png',
                'tipegame' => 'Mobile/PC',
                'namagame' => 'Tower of Fantasy',
                'linkgame' => "{{ route('topupTOF') }}"
            ],

        ];

        foreach ($datatipe_game as $data) {
            type_game::create($data);
        }
    }
}
