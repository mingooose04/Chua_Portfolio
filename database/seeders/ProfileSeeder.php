<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('profiles')->insert([
            ['first_name' => 'Gabrielle Mia','last_name' => 'Chua',
            'title' => '3rd Year Computer Science Student',
            'bio' => 'Hi! I am Gabrielle Mia Chua, I am a student designer, developer and an artist currently shaping my path in UI/UX. I love building intuitive systems
                                    that blend technical structure with creative spark, whether I am crafting branding guides, prototyping in Figma, or just refining layouts.
                                    When I am not designing, you will find me deep in a comic panel, baking experimental desserts, binge-watching a series, or just vibing to a playlist that matches my current mood. 
                                    I believe design is like storytelling-clear, expressive and full of personality.',
            'email' => 'Laravel',
            'location' => 'Bacolod City, Negros Occidental, Philippines']
        ]);
    }

}
