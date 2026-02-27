<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name' => 'HTML', 'level' => 'Intermediate','description'=>'I build clear, semantic web pages and accessible forms. I structure content for readability, and I integrate templates and partials into projects.'],
            ['name' => 'CSS', 'level' => 'Intermediate','description'=>'I create responsive layouts using Flexbox and Grid and style components consistently. I work with Bootstrap and organize styles for maintainability across devices.'],
            ['name' => 'JavaScript', 'level' => 'Intermediate','description'=>'I add interactivity and handle events. I validate inputs, and implement small UI behaviors or widgets.'],
            ['name' => 'PHP', 'level' => 'Beginner','description'=>'I write simple scripts and basic CRUD logic to handle form data and server responses. I’m learning to organize code into reusable functions and cleaner structures.'],
            ['name' => 'Laravel', 'level' => 'Beginner','description'=>'I create routes, controllers, and Blade views to connect database content to the UI. I understand basic Eloquent queries, migrations, and seeding for development.'],
            ['name' => 'Figma', 'level' => 'Advanced','description'=>'I design polished interfaces, build reusable components, and create interactive prototypes for testing. I prepare design files for handoff and keep a clear structure for collaboration.'],
            ['name' => 'Unity', 'level' => 'Intermediate','description'=>'I script gameplay in C#, assemble scenes with prefabs, and manage basic physics and input systems. I prototype mechanics, debug runtime issues, and iterate on game features.'],
            ['name' => 'Photoshop', 'level' => 'Intermediate','description'=>'I edit and retouch images, composite layers, and perform color correction. I prepare optimized assets for web and UI use and work with masks and adjustment layers for precise results.']
        
        ]);
    }
}
