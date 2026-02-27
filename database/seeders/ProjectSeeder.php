<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'title' => 'Bust a Beat',
            'description' => 'A 2D platformer rhythm game me and my team made for a project, it covers the story of Guni and how he rises to the top in Tupil Town.',
            'tech_stack' => 'C# and Unity'
        ]);

        DB::table('projects')->insert([
            'title' => 'Gravelight',
            'description' => 'Gravelight is a 3D puzzle‑adventure where you help restless spirits find peace. Solve environmental puzzles, uncover each ghost’s unfinished story, 
                            and guide them toward ascension with the help of a loyal companion named Wick.',
            'tech_stack' => 'C# and Unity'
        ]);

        DB::table('projects')->insert([
            'title' => 'FluxTrack',
            'description' => 'FluxTrack is a mall incident reporting app where administrators log incidents and assign staff to resolve them. It centralizes reports, 
                            tracks status and timestamps, and stores assigned personnel and resolution notes for clear accountability and faster response.',
            'tech_stack' => 'PHP, HTML, JavaScript, CSS'
        ]);

        DB::table('projects')->insert([
            'title' => 'Hive UI',
            'description' => 'Hive is a library web application that streamlines borrowing and returns for students while giving administrators full visibility into circulation. 
                            Students can search the catalog, check out items, and view their borrowing history. Administrators can  set due dates, monitor overdue items, and manage returns.',
            'tech_stack' => 'Figma'
        ]);

        DB::table('projects')->insert([
            'title' => 'Repora UI',
            'description' => 'Mall Incident Reporting app where users can report incidents detailing the type, location, and the team needed for response. 
                            The assigned staff then receives incident reports that were submitted, and they can choose to respond to these incidents, take appropriate action, 
                            and report the completed assessment to update the status once the incident is resolved.',
            'tech_stack' => 'Figma'
        ]);

        DB::table('projects')->insert([
            'title' => 'Parkly UI',
            'description' => 'The interface of a parking visualization/reservation app, where you can pick and reserve a spot for your vehicle.',
            'tech_stack' => 'Figma'
        ]);

        DB::table('projects')->insert([
            'title' => 'RushEase UI',
            'description' => 'he interface of a delivery/restocking app wherein delivery drivers can select slots to avoid traffic congestion and deliver stock on time.',
            'tech_stack' => 'Figma'
        ]);

        DB::table('projects')->insert([
            'title' => 'Department Post',
            'description' => 'A bahaus inspired post I made for each department in Google Developer Groups On Campus - USLS',
            'tech_stack' => 'Figma'
        ]);

        DB::table('projects')->insert([
            'title' => 'Quandary Poster',
            'description' => 'A post I made for our University Week. Made this with 3D assets I made myself.',
            'tech_stack' => 'Figma'
        ]);

        DB::table('projects')->insert([
            'title' => 'Budget Buddy',
            'description' => 'A system to help track cash inflow and outflow for every month. Budget Buddy was made with Java with a customized GUI, which I designed with my partner.',
            'tech_stack' => 'Java'
        ]);

        DB::table('projects')->insert([
            'title' => 'Creative Posters',
            'description' => 'These are posters I make as a hobby, it allows me to learn design components and apply them to my designs',
            'tech_stack' => 'Figma'
        ]);
    }
}
