<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Administrador",
            "email" => "admin@email.com",
            "password" => '$2y$10$S82IxPX2r3X.GTYZsOMXb.CNjMLT7XKCf.TB9Uo/MygFaLk/DLO7u',
        ]);
    }
}
