<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'email' => 'chuagabrielle04@gmail.com',
            'phone' => '09158479517',
            'facebook' => 'https://www.facebook.com/gabriellemia.chua',
            'linkedin' => 'www.linkedin.com/in/gabrielle-mia-chua-3734a92b2',
            'github' => 'https://github.com/mingooose04'
        ]);
    }
}
