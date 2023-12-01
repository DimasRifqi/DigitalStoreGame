<?php

namespace Database\Seeders;

use App\Models\contact_us;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kritik_saran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tipe game
        $datakritik_saran = [
            [
                'nama' => 'teguh',
                'email' => 'teguh@gmail.com',
                'subject' => 'saran',
                'message' => 'mantap',
            ],

            [
                'nama' => 'budi',
                'email' => 'budi@gmail.com',
                'subject' => 'saran',
                'message' => 'mantap',
            ],

        ];

        foreach ($datakritik_saran as $data) {
            contact_us::create($data);
        }
    }
}
