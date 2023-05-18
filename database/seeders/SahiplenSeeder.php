<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sahiplen;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SahiplenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('sahiplen')->truncate();


        $hayvan_ad = ['minnoş','muhtar','karamel','bıyık','boncuk'];
        $cins = ['Tekir(sokak kedisi)', 'Ankara Kedisi','Amerikan Kılı','Birman'];
        $ilce = ['Karatay', 'Selçuklu','Meram'];
        $faker = Faker::create();

        for ($i = 0; $i< 100; $i++){
           DB::table('sahiplen')->insert([
               'user_id' => 1,
               'hayvan_image' => 'asdasd.png',
               'hayvan_ad' => $hayvan_ad[rand(0,4)],
               'tur' => rand(1,5),
               'yas' => rand(1,30),
               'cins' => $cins[rand(0,3)],
               'cinsiyet' => rand(0,1),
               'kisir' => rand(0,1),
               'kuduz' => rand(0,1),
               'karma' => rand(0,1),
               'parazit' => rand(0,1),
               'kalp_kurtlari' => rand(0,1),
               'cip_no' => rand(100000000000000,999999999999999),
               'il_id' => rand(1,81),
               'ilce' => $ilce[rand(0,2)],
               'adres' => rand(1000,1500).'sokak',
               'baslik' => 'Baslik'.rand(1000,1500),
               'aciklama' => 'Bu bir acıklama mesajıdır'.rand(1000,1500),
               'created_at' =>$faker->DateTime('2007-05-29 22:30:48', 'Europe/Paris'),


           ]);
        }
    }
}
