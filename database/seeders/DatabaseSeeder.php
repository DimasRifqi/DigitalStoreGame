<?php

namespace Database\Seeders;

use App\Models\item_game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\type_game;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        //User::factory(10)->create();

        //user
        $datauser = [
            [
                //1
                'fullname' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '432567865432',
                'password' =>  bcrypt('123456'),
                'is_admin' => 1
            ],

            [
                //2
                'fullname' => 'ryan',
                'email' => 'ryan@gmail.com',
                'phone' => '432567865412',
                'password' =>  bcrypt('123456'),
                'is_admin' => 1
            ],

            [
                //3
                'fullname' => 'nanda',
                'email' => 'nanda@gmail.com',
                'phone' => '85567865432',
                'password' =>  bcrypt('123456'),
                'is_admin' => 1
            ],

            [
                //4
                'fullname' => 'dimas',
                'email' => 'dimas@gmail.com',
                'phone' => '142567865432',
                'password' =>  bcrypt('123456'),
                'is_admin' => 1
            ],

        ];

        foreach ($datauser as $data) {
            User::create($data);
        }

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

        ];

        foreach ($datatipe_game as $data) {
            type_game::create($data);
        }


        //item game
        $dataitem_game = [
            [
                //1
                'foto_item' => 'img/GITopUp/1gene.png',
                'item' => '60 Genesis',
                'harga' => '17000',
                'promo' => '13000',
                'idtypegame' => 1
            ],

            [
                //2
                'foto_item' => 'img/GITopUp/2gene.png',
                'item' => '300+30 Genesis',
                'harga' => '81000',
                'promo' => '65000',
                'idtypegame' => 1
            ],

            [
                //3
                'foto_item' => 'img/GITopUp/3gene.png',
                'item' => '980+110 Genesis',
                'harga' => '255000',
                'promo' => '205000',
                'idtypegame' => 1
            ],

        ];

        foreach ($dataitem_game as $data) {
            item_game::create($data);
        }



    }
}
