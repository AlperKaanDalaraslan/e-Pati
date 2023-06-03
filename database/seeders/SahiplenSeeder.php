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
        $cinsler= [
            ['id'=>1 , 'cins'=>'Ankara Kedis '],
            ['id'=>1 , 'cins'=>'Scottish Fold'],
            ['id'=>1 , 'cins'=>'Van kedisi'],
            ['id'=>1 , 'cins'=>'Birman'],
            ['id'=>2 , 'cins'=>'Akbaş'],
            ['id'=>2 , 'cins'=>'Alman Kurdu'],
            ['id'=>2 , 'cins'=>'Bernese Dağ Köpeğ'],
            ['id'=>2 , 'cins'=>'Pitbull'],
            ['id'=>3 , 'cins'=>'Çalıkuşu'],
            ['id'=>3 , 'cins'=>'Guguk Kuşu'],
            ['id'=>3 , 'cins'=>'Kırlangıç'],
            ['id'=>3 , 'cins'=>'Turna'],
            ['id'=>4 , 'cins'=>'Altın Hamster'],
            ['id'=>4 , 'cins'=>'Kafkas Hamsteri'],
            ['id'=>4 , 'cins'=>'Roborovski Hamsteri'],
            ['id'=>5 , 'cins'=>'Beta Balığı (Kampiyon)'],
            ['id'=>5 , 'cins'=>'Kılıç Balığı'],
            ['id'=>5 , 'cins'=>'Prenses Balığı'],
        ];
        $faker = Faker::create();
        $districts = json_decode(json_encode(DB::table('ilceler')->get()), true);
        for ($i = 0; $i< 100; $i++){
            $tarih = $faker->dateTimeBetween('2022-01-01', '2023-06-02');
            $randomcins=$cinsler[array_rand($cinsler)];
            $cins=$randomcins['cins'];
            $rand_il = rand(1,81);
            $filteredArray = array_filter($districts, function ($item) use ($rand_il){
                return $item['il_id'] == $rand_il;
            });
            $randomItem = array_rand($filteredArray);
            $randomilce = $filteredArray[$randomItem]['ilce_ad'];
           DB::table('sahiplen')->insert([
               'user_id' => rand(4,103),
               'hayvan_image' => $faker->imageUrl($width = 640, $height = 480),
               'hayvan_ad' => $faker->word,
               'tur' => $randomcins['id'] ,
               'yas' => rand(1,30),
               'cins' => $cins,
               'cinsiyet' => rand(0,1),
               'kisir' => rand(0,1),
               'kuduz' => rand(0,1),
               'karma' => rand(0,1),
               'parazit' => rand(0,1),
               'kalp_kurtlari' => rand(0,1),
               'cip_no' => rand(100000000000000,999999999999999),
               'il_id' =>$rand_il ,
               'ilce' => $randomilce,
               'adres' => $faker->address,
               'baslik' => $faker->sentence(2),
               'aciklama' => $faker->sentence(20),
               'created_date' => $tarih,


           ]);
        }
    }
}
