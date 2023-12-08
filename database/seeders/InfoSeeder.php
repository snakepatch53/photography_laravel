<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("infos")->insert([
            "info_name" => "Gonzalo Producciones",
            "info_address" => "56-15 VAN CLEEF ST CORONA, NY 11368"
        ]);
    }
}
