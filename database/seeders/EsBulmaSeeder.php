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
        $hayvan_ad = ['animal_1','animal_2','animal_3','animal_4'];
        $faker = Faker::create();
        $districts = json_decode(json_encode(DB::table('ilceler')->get()), true);
        for ($i = 0; $i< 100; $i++){
            $tarih = $faker->dateTimeBetween('2022-01-01', '2023-06-02');
            $randomcins= $cinsler[array_rand($cinsler)];
            $cins=$randomcins['cins'];
            $rand_il = rand(1,81);
            $filteredArray = array_filter($districts, function ($item) use ($rand_il){
                return $item['il_id'] == $rand_il;
            });
            $randomItem = array_rand($filteredArray);
            $randomilce = $filteredArray[$randomItem]['ilce_ad'];
            DB::table('es_bulma')->insert([
                'user_id' => 2,
                'hayvan_image' => 'animal.jpg',
                'hayvan_ad' => $hayvan_ad[rand(0,3)],
                'tur' => $randomcins['id'] ,
                'cins' => $cins,
                'cinsiyet' => rand(0,1),
                'yas' => rand(1,30),
                'kisirlik_durumu' => rand(0,1),
                'il_id' => $rand_il,
                'ilce' => $randomilce,
                'adres' => $faker->address,
                'baslik' => $faker->sentence(3),
                'aciklama' => $faker->sentence(20),
                'created_at' => $tarih,
            ]);
        }
    }
}
