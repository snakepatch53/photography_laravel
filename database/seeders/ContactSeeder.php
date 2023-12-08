<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            "contact_name" => "Phone",
            "contact_value" => "347-258-2888",
            "contact_link" => "tel:347-258-2888",
            "contact_icon" => "fas fa-phone-alt",
            "contact_color" => "#3374ff"
        ]);

        DB::table('contacts')->insert([
            "contact_name" => "Email",
            "contact_value" => "gonzaloproducciones1@hotmail.com",
            "contact_link" => "mailto:gonzaloproducciones1@hotmail.com",
            "contact_icon" => "fas fa-envelope",
            "contact_color" => "#28a8ea"
        ]);

        DB::table('contacts')->insert([
            "contact_name" => "Facebook",
            "contact_value" => "@fotoyvideonewyork",
            "contact_link" => "http://www.facebook.com/fotoyvideonewyork",
            "contact_icon" => "fab fa-facebook-f",
            "contact_color" => "#3b5998"
        ]);
    }
}
