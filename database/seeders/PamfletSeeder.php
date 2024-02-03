<?php

namespace Database\Seeders;

use App\Models\Pamflet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PamfletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Pamflet
        $data_pamflet = [
            [
                //1
                'foto' => 'img/pamflet/pamflet 1.png'
            ],

            [
                //2
                'foto' => 'img/pamflet/pamflet 2.png'
            ],

            [
                //3
                'foto' => 'img/pamflet/pamflet 3.png'
            ]

        ];

        foreach ($data_pamflet as $data) {
            Pamflet::create($data);
        }
    }
}
