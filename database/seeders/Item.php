<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\item_game;

class Item extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //item GENSHIN
         $dataitem_Genshin = [
            [
                //1
                'foto_item' => 'img/GITopUp/1gene.png',
                'item' => '60 Genesis',
                'harga' => '17000',
                'promo' => '13000',
                'id_typegame' => 1
            ],

            [
                //2
                'foto_item' => 'img/GITopUp/2gene.png',
                'item' => '300+30 Genesis',
                'harga' => '81000',
                'promo' => '65000',
                'id_typegame' => 1
            ],

            [
                //3
                'foto_item' => 'img/GITopUp/3gene.png',
                'item' => '980+110 Genesis',
                'harga' => '255000',
                'promo' => '205000',
                'id_typegame' => 1
            ],

            [
                //4
                'foto_item' => 'img/GITopUp/4gene.png',
                'item' => '1980+260 Genesis',
                'harga' => '490000',
                'promo' => '410000',
                'id_typegame' => 1
            ],

            [
                //4
                'foto_item' => 'img/GITopUp/5gene.png',
                'item' => '3280+600 Genesis',
                'harga' => '815000',
                'promo' => '640000',
                'id_typegame' => 1
            ],

            [
                //6
                'foto_item' => 'img/GITopUp/6gene.png',
                'item' => '6480+1600 Genesis',
                'harga' => '1630000',
                'promo' => '1250000',
                'id_typegame' => 1
            ],

            [
                //7
                'foto_item' => 'img/GITopUp/welkin.png',
                'item' => '1x Welkin Moon',
                'harga' => '81000',
                'promo' => '65000',
                'id_typegame' => 1
            ],

            [
                //8
                'foto_item' => 'img/GITopUp/welkin.png',
                'item' => '2x Welkin Moon',
                'harga' => '162000',
                'promo' => '130000',
                'id_typegame' => 1
            ],

            [
                //9
                'foto_item' => 'img/GITopUp/welkin.png',
                'item' => '3x Welkin Moon',
                'harga' => '243000',
                'promo' => '190000',
                'id_typegame' => 1
            ],

        ];

        foreach ($dataitem_Genshin as $data) {
            item_game::create($data);
        }

         //item HSR
         $dataitem_HSR = [
            [
                //1
                'foto_item' => 'img/HSRTopUp/image 49.png',
                'item' => '60 Oneiric Shard',
                'harga' => '17000',
                'promo' => '13000',
                'id_typegame' => 2
            ],

            [
                //2
                'foto_item' => 'img/HSRTopUp/image 50.png',
                'item' => '300+30 Oneiric Shard',
                'harga' => '81000',
                'promo' => '65000',
                'id_typegame' => 2
            ],

            [
                //3
                'foto_item' => 'img/HSRTopUp/image 51.png',
                'item' => '980+110 Oneiric Shard',
                'harga' => '255000',
                'promo' => '205000',
                'id_typegame' => 2
            ],

            [
                //4
                'foto_item' => 'img/HSRTopUp/image 52.png',
                'item' => '1980+260 Oneiric Shard',
                'harga' => '490000',
                'promo' => '410000',
                'id_typegame' => 2
            ],

            [
                //4
                'foto_item' => 'img/HSRTopUp/image 53.png',
                'item' => '3280+600 Oneiric Shard',
                'harga' => '815000',
                'promo' => '640000',
                'id_typegame' => 2
            ],

            [
                //6
                'foto_item' => 'img/HSRTopUp/image 54.png',
                'item' => '6480+1600 Oneiric Shard',
                'harga' => '1630000',
                'promo' => '1250000',
                'id_typegame' => 2
            ],

            [
                //7
                'foto_item' => 'img/HSRTopUp/image 55.png',
                'item' => '1x Express Supply Pass',
                'harga' => '81000',
                'promo' => '65000',
                'id_typegame' => 2
            ],

            [
                //8
                'foto_item' => 'img/HSRTopUp/image 55.png',
                'item' => '2x Express Supply Pass',
                'harga' => '162000',
                'promo' => '130000',
                'id_typegame' => 2
            ],

            [
                //9
                'foto_item' => 'img/HSRTopUp/image 55.png',
                'item' => '3x Express Supply Pass',
                'harga' => '243000',
                'promo' => '190000',
                'id_typegame' => 2
            ],

        ];

        foreach ($dataitem_HSR as $data) {
            item_game::create($data);
        }

        //item ML
        $dataitem_ML = [
            [
                //1
                'foto_item' => 'img/MLTopUp/Rectangle 57.png',
                'item' => '250+25 Diamonds',
                'harga' => '90000',
                'promo' => '80000',
                'id_typegame' => 3
            ],

            [
                //2
                'foto_item' => 'img/MLTopUp/Rectangle 58.png',
                'item' => '500+65 Diamonds',
                'harga' => '170000',
                'promo' => '155000',
                'id_typegame' => 3
            ],

            [
                //3
                'foto_item' => 'img/MLTopUp/Rectangle 59.png',
                'item' => '1000+155 Diamonds',
                'harga' => '315000',
                'promo' => '306000',
                'id_typegame' => 3
            ],

            [
                //4
                'foto_item' => 'img/MLTopUp/Rectangle 60.png',
                'item' => '1500+265 Diamonds',
                'harga' => '490000',
                'promo' => '456000',
                'id_typegame' => 3
            ],

            [
                //5
                'foto_item' => 'img/MLTopUp/Rectangle 61.png',
                'item' => '2500+475 Diamonds',
                'harga' => '815000',
                'promo' => '657000',
                'id_typegame' => 3
            ],

            [
                //6
                'foto_item' => 'img/MLTopUp/Rectangle 62.png',
                'item' => '5000+1000 Diamonds',
                'harga' => '1630000',
                'promo' => '1506000',
                'id_typegame' => 3
            ],

            [
                //7
                'foto_item' => 'img/MLTopUp/Rectangle 56.png',
                'item' => '1x Weekly Diamond Pass',
                'harga' => '40000',
                'promo' => '33000',
                'id_typegame' => 3
            ],

            [
                //8
                'foto_item' => 'img/MLTopUp/Rectangle 56.png',
                'item' => '2x Weekly Diamond Pass',
                'harga' => '80000',
                'promo' => '60000',
                'id_typegame' => 3
            ],

            [
                //9
                'foto_item' => 'img/MLTopUp/Rectangle 56.png',
                'item' => '3x Weekly Diamond Pass',
                'harga' => '120000',
                'promo' => '90000',
                'id_typegame' => 3
            ],

        ];

        foreach ($dataitem_ML as $data) {
            item_game::create($data);
        }

        //item TOF
        $dataitem_TOF = [
            [
                //1
                'foto_item' => 'img/TOFTopUp/image 61.png',
                'item' => '60 Tanium',
                'harga' => '25000',
                'promo' => '15000',
                'id_typegame' => 4
            ],

            [
                //2
                'foto_item' => 'img/TOFTopUp/image 62.png',
                'item' => '310 Tanium',
                'harga' => '85000',
                'promo' => '65000',
                'id_typegame' => 4
            ],

            [
                //3
                'foto_item' => 'img/TOFTopUp/image 63.png',
                'item' => '1020 Tanium',
                'harga' => '215000',
                'promo' => '200000',
                'id_typegame' => 4
            ],

            [
                //4
                'foto_item' => 'img/TOFTopUp/image 64.png',
                'item' => '2080 Tanium',
                'harga' => '420000',
                'promo' => '400000',
                'id_typegame' => 4
            ],

            [
                //5
                'foto_item' => 'img/TOFTopUp/image 65.png',
                'item' => '3480Tanium',
                'harga' => '675000',
                'promo' => '650000',
                'id_typegame' => 4
            ],

            [
                //6
                'foto_item' => 'img/TOFTopUp/image 66.png',
                'item' => '6980 Tanium',
                'harga' => '1250000',
                'promo' => '1220000',
                'id_typegame' => 4
            ],

            [
                //7
                'foto_item' => 'img/TOFTopUp/Rectangle 64.png',
                'item' => 'Monthly Pass Supllies',
                'harga' => '90000',
                'promo' => '70000',
                'id_typegame' => 4
            ],

            [
                //8
                'foto_item' => 'img/TOFTopUp/Rectangle 66.png',
                'item' => 'Upgrade  Pass',
                'harga' => '180000',
                'promo' => '160000',
                'id_typegame' => 4
            ],

            [
                //9
                'foto_item' => 'img/TOFTopUp/Rectangle 65.png',
                'item' => 'Collectors Edition Pass',
                'harga' => '350000',
                'promo' => '300000',
                'id_typegame' => 4
            ],

        ];

        foreach ($dataitem_TOF as $data) {
            item_game::create($data);
        }

    }
}
