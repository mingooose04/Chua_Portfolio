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
            ['name' => 'HTML', 'level' => 'Intermediate'],
            ['name' => 'CSS', 'level' => 'Intermediate'],
            ['name' => 'JavaScript', 'level' => 'Intermediate'],
            ['name' => 'PHP', 'level' => 'Beginner'],
            ['name' => 'Laravel', 'level' => 'Beginner']
        
        ]);
    }
}
