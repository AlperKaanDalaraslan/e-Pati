<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VeterinerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $ilce = ['Karatay', 'Selçuklu','Meram'];
        $rand_bas = ['06', '07','08','09'];
        $rand_bit = ['16', '17','18','19'];
        $rand_aralik = ['15','20','30'];
        $districts = json_decode(json_encode(DB::table('ilceler')->get()), true);
        for ($i = 0; $i< 500; $i++){
            $rand_il = rand(1, 81);
            $filteredArray = array_filter($districts, function ($item) use ($rand_il){
                return $item['il_id'] == $rand_il;
            });
            $randomItem = array_rand($filteredArray);
            $randomilce = $filteredArray[$randomItem]['ilce_ad'];
            $userID = DB::table('users')->insertGetId([
                'status' => 2,
                'email'=>$faker->email,
                'user_image' => '/images/user_2.png',
                'tel' => '0533 333 3333',
                'password' => Hash::make('123456789'),
            ]);
            DB::table('veteriner')->insert([
                'vet_id' => $userID,
                'klinik_ad' => 'Veterinerad'.rand(1,1000),
                'il_id' => $rand_il,
                'ilce' => $randomilce,
                'adres' => 'adres'.rand(1000,10000),



            ]);
            DB::table('vet_uzmanlik')->insert([
                'vet_id' => $userID,
                'cerrahi' => 1,
                'muayene' => rand(0,1),
               'lab' => rand(0,1),
               'teshis' => rand(0,1),
               'kuafor' => rand(0,1),
               'koruyucu_hekim' => rand(0,1),
                'yogun_bakim' => rand(0,1),
                'rontgen' => rand(0,1),
                'dahiliye' => rand(0,1),
            ]);
            for($j=0; $j < 5 ; $j++ ){
            DB::table('vet_calisma')->insert([
                'vet_id' => $userID,
                'gun' => $j+1,
                'randevu_bas' => $rand_bas[rand(0,3)].':00',
                'randevu_bit' => $rand_bit[rand(0,3)].':00',
                'randevu_aralik' => $rand_aralik[rand(0,2)],
            ]);
            }
        }
    }
}
