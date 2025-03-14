<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::updateOrCreate(
            
            ["title" => "My Name is Mohamed Fathi and I am Backend developer"],
            [
                "title" => "My Name is Mohamed Fathi and I am Backend developer",
                "about_me" => "Building the backbone of innovation – I craft robust, scalable backend solutions that power businesses and turn visions into reality.",
                "linkedin" => "https://www.linkedin.com/in/mohamedfathi-/",
                "github" => "https://github.com/mohamedfathidev",
                "whatsapp" => "+201020131424"
            ]
            );
    }
}
