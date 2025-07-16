<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Super Admin",
                "email" => "ramasakti1337@gmail.com",
                "password" => bcrypt("Ramasakti123*")
            ]
        ];

        DB::table('users')->insert($data);
    }
}
