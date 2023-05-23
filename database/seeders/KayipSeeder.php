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
        $ilce = ['Melikgazi', 'Kocasinan','Yahyalı'];
        $faker = Faker::create();
        for ($i = 0; $i< 100; $i++) {
            DB::table('kayip')->insert([
                'user_id' => 3,
                'hayvan_image' => '20054444.png',
                'tur' => rand(1, 5),
                'cinsiyet' => rand(0, 1),
                'kayip_durumu' => rand(0, 1),
                'cip_no' => rand(111111111111111, 999999999999999),
                'il_id' => rand(1, 81),
                'ilce' => $ilce[rand(0, 2)],
                'adres' => rand(1000, 1500) . 'sokak',
                'baslik' => 'BASLİK' . rand(1000, 1500),
                'aciklama' => 'ACİKLAMA' . rand(1000, 1500),
                'created_at' =>$faker->DateTime('2007-05-29 22:30:48', 'Europe/Paris'),
            ]);
        }
    }
}
