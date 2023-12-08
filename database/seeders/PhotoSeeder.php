<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("photos")->insert([
            "photo_name" => "1.jpg",
            "service_id" => 1
        ]);

        DB::table("photos")->insert([
            "photo_name" => "2.jpg",
            "service_id" => 1
        ]);

        DB::table("photos")->insert([
            "photo_name" => "3.jpg",
            "service_id" => 1
        ]);

        DB::table("photos")->insert([
            "photo_name" => "4.jpg",
            "service_id" => 1
        ]);

        DB::table("photos")->insert([
            "photo_name" => "5.jpg",
            "service_id" => 1
        ]);

        DB::table("photos")->insert([
            "photo_name" => "6.jpg",
            "service_id" => 1
        ]);

        DB::table("photos")->insert([
            "photo_name" => "7.jpg",
            "service_id" => 2
        ]);

        DB::table("photos")->insert([
            "photo_name" => "8.jpg",
            "service_id" => 2
        ]);

        DB::table("photos")->insert([
            "photo_name" => "9.jpg",
            "service_id" => 2
        ]);

        DB::table("photos")->insert([
            "photo_name" => "10.jpg",
            "service_id" => 2
        ]);

        DB::table("photos")->insert([
            "photo_name" => "11.jpg",
            "service_id" => 2
        ]);

        DB::table("photos")->insert([
            "photo_name" => "12.jpg",
            "service_id" => 2
        ]);
        DB::table("photos")->insert([
            "photo_name" => "13.jpg",
            "service_id" => 3
        ]);

        DB::table("photos")->insert([
            "photo_name" => "14.jpg",
            "service_id" => 3
        ]);

        DB::table("photos")->insert([
            "photo_name" => "15.jpg",
            "service_id" => 3
        ]);

        DB::table("photos")->insert([
            "photo_name" => "16.jpg",
            "service_id" => 3
        ]);

        DB::table("photos")->insert([
            "photo_name" => "17.jpg",
            "service_id" => 3
        ]);

        DB::table("photos")->insert([
            "photo_name" => "18.jpg",
            "service_id" => 3
        ]);
    }
}
