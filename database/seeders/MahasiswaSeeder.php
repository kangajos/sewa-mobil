<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [

                "name" => "adi",
                "nilai" => 99,
            ],
            [

                "name" => "charlie",
                "nilai" => 80,
            ],
            [

                "name" => "sita",
                "nilai" => 97,
            ],
            [

                "name" => "bagus",
                "nilai" => 60,
            ],
            [

                "name" => "bima",
                "nilai" => 40,
            ],
            [

                "name" => "riski",
                "nilai" => 30,
            ],
            [

                "name" => "kurnia",
                "nilai" => 11,
            ],
            [

                "name" => "via",
                "nilai" => 20,
            ],
            [

                "name" => "samue",
                "nilai" => 94,
            ],
        ];

        Mahasiswa::insert($data);
    }
}
