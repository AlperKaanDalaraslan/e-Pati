<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Es_bul;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EsBulmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hayvan_ad = ['animal_1','animal_2','animal_3','animal_4'];
        $cins = ['tur_1', 'tur_2','tur_3','tur_4'];
        $ilce = ['ilce_1', 'ilce_2','ilce_3', 'ilce_4'];
        $faker = Faker::create();

        for ($i = 0; $i< 100; $i++){
            DB::table('es_bulma')->insert([
                'user_id' => 2,
                'hayvan_image' => 'animal.jpg',
                'hayvan_ad' => $hayvan_ad[rand(0,3)],
                'tur' => rand(1,5),
                'cins' => $cins[rand(0,3)],
                'cinsiyet' => rand(0,1),
                'yas' => rand(1,30),
                'kisirlik_durumu' => rand(0,1),
                'il_id' => rand(1, 81),
                'ilce' => $ilce[rand(0,3)],
                'adres' => rand(100, 1000).'sokak',
                'aciklama' => 'Açıklama mesajı'.rand(100, 1000),
                'created_at' => $faker->DateTime('2007-05-29 22:30:48', 'Europe/Paris'),
            ]);
        }
    }
}
