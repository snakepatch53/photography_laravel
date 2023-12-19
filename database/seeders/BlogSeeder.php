<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("blogs")->insert([
            "blog_title" => "My Dreams Quinceanera",
            "blog_subtitle" => "My Dream Quinceanera Expo at Dreams NYC Event space",
            "blog_image" => "1.jpg",
            "blog_description" => "Vimagez had the Privilege to attend to the Expo here are some photos of the Expo some of the vendors include: chimoli , NYC Bartender Service , Creativity by LIZ , Los Compadres Bartenders , Tequila City , Agave Azteca , RXoco events , Creatings by Yeli , B. Cine Studio, Quinceaneras New York , Eventos latinos NY , QuinceDresses.com , Maya's , Spikez Entertainment , Aj Glams , Makeup by DEE , La Bomboniera Marylu , Vimagez , Gaby's Decorating Ideas",
            "blog_content" => ""
        ]);

        DB::table("blogs")->insert([
            "blog_title" => "Melany's Beautiful Sweet 16",
            "blog_subtitle" => "Melany's Beautiful Sweet 16 photo shoot session in Central Park, NY",
            "blog_image" => "2.jpg",
            "blog_description" => "Pre Event photo shoots are my favorite to shoot as a photographer. There is something amazing about picking the perfect day, perfect time to create a epic photograph that you will love and cherish forever.",
            "blog_content" => ""
        ]);

        DB::table("blogs")->insert([
            "blog_title" => "Agusmery's Beautiful Sweet 16",
            "blog_subtitle" => "Agusmery's Beautiful Sweet 16 Photo Shoot Session in Central Park, NY by Vimagez",
            "blog_image" => "3.jpg",
            "blog_description" => "Photo shoots are my favorite to shoot as a photographer. It provides a wonderful opportunity to test your hairstyle and make-up before the main event. What is more, you can also try out your dress. You’ll have control over the location, giving you a chance to see yourself in a different setting. The day of the event is very fast paced due to time constrictions, the benefits of a Pre Event session is that, we get to choose a beautiful day, without worrying about the time, weather or traffic to create a epic photograph that you will love and cherish forever.",
            "blog_content" => ""
        ]);

        DB::table("blogs")->insert([
            "blog_title" => "Valentine's day",
            "blog_subtitle" => "Valentine's day Mini Sessions",
            "blog_image" => "4.jpg",
            "blog_description" => "Vimagez specializes in creating beautiful pieces of ART. We want our results to be full of emotions, happiness, fun, love and create memories that you will love for a lifetime and allow you to relive the story of your day over and over again. We create our beautiful images through a variety of off-camera flashes, using modifiers, colored gels, LED lights, and natural light techniques using the latest technology. We believe that good customer service and good quality of Photography & Video.",
            "blog_content" => ""
        ]);

        DB::table("blogs")->insert([
            "blog_title" => "Maternity Session",
            "blog_subtitle" => "New York City Maternity Session",
            "blog_image" => "5.jpg",
            "blog_description" => "Maternity Portraiture is one of my favorite genres to shoot as a photographer. There is something amazing about a new family starting that any photographer that photographs weddings can appreciate. Maternity photography gets to capture the transition of a couple to a family, and for us represents the second part of our client's lives.",
            "blog_content" => ""
        ]);

        DB::table("blogs")->insert([
            "blog_title" => "Vinny & Alys Wedding",
            "blog_subtitle" => "Vinny & Alys Wedding in Gargiulo's Restaurant in Coney Island, Brooklyn, NY",
            "blog_image" => "6.jpg",
            "blog_description" => "Vimagez specializes in creating beautiful pieces of ART. We want our results to be full of emotions, happiness, fun, love and create memories that you will love for a lifetime and allow you to relive the story of your day over and over again. We create our beautiful images through a variety of off-camera flashes, using modifiers, colored gels, LED lights, and natural light techniques using the latest technology. We believe that good customer service and good quality of Photography & Video.",
            "blog_content" => ""
        ]);
    }
}
