<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SayacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sayac')->insert([
            'randevu'=> 0,
            'sahiplen'=> 0,
            'kayip'=> 0,
            'es_bul'=> 0,
        ]);
    }
}
