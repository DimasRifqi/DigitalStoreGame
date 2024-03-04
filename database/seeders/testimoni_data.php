<?php

namespace Database\Seeders;

use App\Models\testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class testimoni_data extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tetstimoni
        $data_testimoni = [
            [
                'foto_testimoni' => 'img/Testimoni/jess.png',
                'nama_testimoni' => 'Jess no limit',
                'pekerjaan_testimoni' => 'Content Creator',
                'komentar_testimoni' => 'Udah setahun lebih langganan DigitalStore, ngga ada masalah sama sekali, adminya ramah, terus dapat invoice tiap top up biar terjamin'
            ],

            [
                'foto_testimoni' => 'img/Testimoni/lemon.png',
                'nama_testimoni' => 'Ikhsan Lemon',
                'pekerjaan_testimoni' => 'Pro Player',
                'komentar_testimoni' => 'Udah setahun lebih langganan DigitalStore, ngga ada masalah sama sekali, adminya ramah, terus dapat invoice tiap top up biar terjamin'
            ],

            [
                'foto_testimoni' => 'img/Testimoni/hans.png',
                'nama_testimoni' => 'Hans The Joomers',
                'pekerjaan_testimoni' => 'Content Creator',
                'komentar_testimoni' => 'Udah setahun lebih langganan DigitalStore, ngga ada masalah sama sekali, adminya ramah, terus dapat invoice tiap top up biar terjamin'
            ],

            [
                'foto_testimoni' => 'img/Testimoni/afif.png',
                'nama_testimoni' => 'Afif Yulistian',
                'pekerjaan_testimoni' => 'Content Creator',
                'komentar_testimoni' => 'Udah setahun lebih langganan DigitalStore, ngga ada masalah sama sekali, adminya ramah, terus dapat invoice tiap top up biar terjamin'
            ],

            [
                'foto_testimoni' => 'img/Testimoni/aura.png',
                'nama_testimoni' => 'Eko Aura Gaming',
                'pekerjaan_testimoni' => 'Pro Player / Content Creator',
                'komentar_testimoni' => 'Udah setahun lebih langganan DigitalStore, ngga ada masalah sama sekali, adminya ramah, terus dapat invoice tiap top up biar terjamin'
            ],

        ];

        foreach ($data_testimoni as $data) {
            testimoni::create($data);
        }
    }
}
