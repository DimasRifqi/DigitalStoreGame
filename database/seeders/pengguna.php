<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class pengguna extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
