<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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

                "name" => "admin",
                "email" => "admin@gmail.com",
                "password" => Hash::make("12345"),
                "role" => "admin"
            ],
            [

                "name" => "masyarakat",
                "email" => "masyarakat@gmail.com",
                "password" => Hash::make("12345"),
                "role" => "masyarakat"
            ],
        ];

        User::insert($data);
    }
}
