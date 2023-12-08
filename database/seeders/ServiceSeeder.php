<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            "service_name" => "Weddings",
            "service_description" => "Our wedding photography is cinematic, meaning it focuses on movement, story, and quality lighting. We take great care to capture beautiful images from all part of the day for our clients. Here is a gallery of some of our portfolio images",
            "service_image" => "1.jpg",
            "service_price" => "100.00"
        ]);
        DB::table("services")->insert([
            "service_name" => "Quinces | Sweet16's",
            "service_description" => "Every Princess needs photo with impact, we want to capture your personality and your talents. We shoot at a variety of locations to create beautiful art.",
            "service_image" => "2.jpg",
            "service_price" => "150.00"
        ]);
        DB::table("services")->insert([
            "service_name" => "Portraits",
            "service_description" => "We craft fine art portraits for our clients in the same format that we do for couples. Our portrait services include family, maternity, newborn, Head shots, Creative Head shots and model portfolios.",
            "service_image" => "3.jpg",
            "service_price" => "300.00"
        ]);
    }
}
