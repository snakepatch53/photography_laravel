<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("videos")->insert([
            "video_title" => "Wedding",
            "video_iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/06jFmW_O6wE?si=Cl9EIBarXSyZUT4g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ]);

        DB::table("videos")->insert([
            "video_title" => "Quinces",
            "video_iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/mT9eW8wZOxU?si=VSKhvO1byaGWZfSv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ]);

        DB::table("videos")->insert([
            "video_title" => "Christening",
            "video_iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/ZNWEVZ3HbwQ?si=sZ3raDyq_6F6XGDY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ]);

        DB::table("videos")->insert([
            "video_title" => "Partie",
            "video_iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/z7l_lQqgYbY?si=h_BSpv9RL5xu7XOM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ]);

        DB::table("videos")->insert([
            "video_title" => "Birthday",
            "video_iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/4RMF9apworQ?si=wtR6klkpn_QEAtYH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ]);

        DB::table("videos")->insert([
            "video_title" => "Event",
            "video_iframe" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Mptyg8bsEOQ?si=-2NFT3pNsohK41N6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ]);
    }
}
