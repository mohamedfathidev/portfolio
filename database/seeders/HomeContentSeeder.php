<?php

namespace Database\Seeders;

use App\Models\HomeContent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeContent::updateOrCreate(
            ["slogan" => "I can help your business to Get online and grow fast with Unsual Speed"],
            [
                "slogan" => "I can help your business to Get online and grow fast with Unsual Speed",
                "categories" => "Backend Development,Software Engineering,Laravel",
                "logo_text" => "MO",
                "image" => "dashboard/assets/E44.PNG"
            ]

            );
    }
}
