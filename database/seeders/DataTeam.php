<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataTeamModels;
class DataTeam extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data Team
        $data_team = [
            [
                //1
                'nama_team' => 'Dimas Rifqi Ramadhani',
                'profesi_team' => 'Front-End & Back-End',
                'foto_team' => 'img/FotoTeam/dimas.jpg',
                'fb_team' => '#',
                'ig_team' => '#',
                'tw_team' => '#'
            ],

            [
                //2
                'nama_team' => 'Ryan Gading Abdullah',
                'profesi_team' => 'Front-End',
                'foto_team' => 'img/FotoTeam/ryan.jpg',
                'fb_team' => '#',
                'ig_team' => '#',
                'tw_team' => '#'
            ],

            [
                //3
                'nama_team' => 'Handi Firstyanda Resi Wibowo',
                'profesi_team' => 'Back-End',
                'foto_team' => 'img/FotoTeam/nanda.jpg',
                'fb_team' => '#',
                'ig_team' => '#',
                'tw_team' => '#'
            ]

        ];

        foreach ($data_team as $data) {
            DataTeamModels::create($data);
        }
    }
}
