<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('experience')->insert([
                'title' => 'Highschool',
                'organization' => 'St. John’s Institute',
                'date' => '2017-2021',
                'description' => 'I spent my highschool years in St. John’s Intitute. I graduated with Second Honors, 
                                positioned as the secretary for my club and was also a consistent class officer in all of my years throughout highschool.'
         ]);

        DB::table('experience')->insert([
                'title' => 'Senior Highschool',
                'organization' => 'University of St. La Salle - Liceo',
                'date' => '2021-2022',
                'description' => 'I spent my senior highschool years in University of St. La Salle - Liceo, completed a curriculum with an emphasis on STEM and graduated with Honors'
         ]);

        DB::table('experience')->insert([
                'title' => 'Cultural Officer',
                'organization' => 'Computer Science Society - University of St. La Salle',
                'date' => '2022-2023',
                'description' => 'Participated in creating booths for school events.'
         ]);
        DB::table('experience')->insert([
                'title' => 'Graphics Lead',
                'organization' => 'Google Developer Groups on Campus - University of St. La Salle',
                'date' => '2023-Present',
                'description' => 'Applied as an officer first but I got promoted to lead after 3 months, I got to create pubmats for the organization while also learning from my peers.'
         ]);

        DB::table('experience')->insert([
                'title' => 'College',
                'organization' => 'University of St. La Salle - Liceo',
                'date' => '2022-Present',
                'description' => 'Enrolled as a Bachelor of Science in Computer Science, I am a consistent honor student and on the Dean’s List'
         ]);
    }
}
