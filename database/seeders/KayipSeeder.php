<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kayip;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class KayipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $districts = json_decode(json_encode(DB::table('ilceler')->get()), true);
        for ($i = 0; $i< 100; $i++) {
            $tarih = $faker->dateTimeBetween('2022-01-01', '2023-06-02');
            $rand_il = rand(1,81);
            $filteredArray = array_filter($districts, function ($item) use ($rand_il){
                return $item['il_id'] == $rand_il;
            });
            $randomItem = array_rand($filteredArray);
            $randomilce = $filteredArray[$randomItem]['ilce_ad'];
            DB::table('kayip')->insert([
                'user_id' => rand(4,103),
                'hayvan_ad' => $faker->word,
                'hayvan_image' => $faker->imageUrl($width = 640, $height = 480),
                'tur' => rand(1, 5),
                'cinsiyet' => rand(0, 1),
                'kayip_durumu' => rand(0, 1),
                'il_id' => $rand_il,
                'ilce' => $randomilce,
                'adres' => $faker->address,
                'baslik' => $faker->sentence(3),
                'aciklama' => $faker->sentence(20),
                'created_date' => $tarih,
            ]);
        }
    }
}
