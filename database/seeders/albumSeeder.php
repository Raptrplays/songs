<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class albumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('albums')->insert([
            "name" => "Led Zeppelin III",
            "year" => "1970",
            "times_sold" => "13000000"
        ]);

        DB::table('albums')->insert([
            "name" => "The Dark Side of the Moon",
            "year" => "1973",
            "times_sold" => "45000000"
        ]);

        DB::table('albums')->insert([
            "name" => "Fear of the Dark",
            "year" => "1992",
            "times_sold" => "794810"
        ]);

        DB::table('albums')->insert([
            "name" => "Powerslave",
            "year" => "1984",
            "times_sold" => "9049000"
        ]);

        DB::table('albums')->insert([
            "name" => "The Number Of The Beast",
            "year" => "1982",
            "times_sold" => "2200380"
        ]);  
    }
}
