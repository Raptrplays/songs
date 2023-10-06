<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bands')->insert([
            "name" => "Led Zeppelin",
            "genre" => "Rock",
            "founded" => "1968"
        ]);

        DB::table('bands')->insert([
            "name" => "Pink Floyd",
            "genre" => "Rock",
            "founded" => "1965"
        ]);

        DB::table('bands')->insert([
            "name" => "Iron Maiden",
            "genre" => "Heavy Metal",
            "founded" => "1975"
        ]);

    }
}
