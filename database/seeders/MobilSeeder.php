<?php

namespace Database\Seeders;

use App\Models\MasterMobil;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
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

                "merk" => "Honda",
                "type" => "Honda 1",
                "harga" => 250000000
            ],
            [

                "merk" => "Honda",
                "type" => "Honda 2",
                "harga" => 170000000

            ]
        ];

        MasterMobil::insert($data);
    }
}
