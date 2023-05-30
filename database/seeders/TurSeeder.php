<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tur;

class TurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tur')->insert([
            'tur_ad'=>'Kedi',
            ]);

        DB::table('tur')->insert([
            'tur_ad'=>'Köpek',
        ]);

        DB::table('tur')->insert([
            'tur_ad'=>'Kuş',
        ]);

        DB::table('tur')->insert([
            'tur_ad'=>'Hamster',
        ]);

        DB::table('tur')->insert([
            'tur_ad'=>'Balık',
        ]);
    }
}
