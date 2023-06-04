<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Haber;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class HaberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 25; $i++){
            $tarih = $faker->dateTimeBetween('2022-01-01', '2023-06-02');
            DB::table('haber')->insert([
                'user_id' => 2,
                'haber_image' => $faker->imageUrl($width = 640, $height = 480),
                'haber_baslik' => $faker->sentence(2),
                'haber_icerik' => $faker->sentence(20),
                'created_at' => $tarih,
            ]);
        }
    }
}
