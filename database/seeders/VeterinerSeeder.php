<?php

namespace Database\Seeders;
use Carbon\Carbon;
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
        $rand_bas = ['06', '07','08','09'];
        $rand_randevu = ['10','11','12','13','14'];
        $rand_bit = ['16', '17','18','19'];
        $rand_aralik = ['15','20','30'];
        $districts = json_decode(json_encode(DB::table('ilceler')->get()), true);
        for ($i = 0; $i< 100; $i++){
            $r_aralik = $rand_aralik[rand(0,2)];
            $rand_il = rand(1, 81);
            $filteredArray = array_filter($districts, function ($item) use ($rand_il){
                return $item['il_id'] == $rand_il;
            });
            $randomItem = array_rand($filteredArray);
            $randomilce = $filteredArray[$randomItem]['ilce_ad'];
            $userID = DB::table('users')->insertGetId([
                'status' => 2,
                'email'=>$faker->unique()->email,
                'user_image' => $faker->imageUrl($width = 640, $height = 480),
                'tel' => rand_tel(),
                'password' => Hash::make('123456789'),
            ]);
            $onay = rand(0,1);
            if($onay == 0){
                DB::table('sertifika')->insert([
                    'vet_id' => $userID,
                    'sertifika_img' => $faker->imageUrl($width = 640, $height = 640),
                ]);
            }
            DB::table('veteriner')->insert([
                'vet_id' => $userID,
                'klinik_ad' => $faker->word.' Veteriner Kliniği',
                'il_id' => $rand_il,
                'ilce' => $randomilce,
                'adres' => $faker->address,
                'onay' => $onay,



            ]);
            if($onay != 0){
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
            $r_aralik = $rand_aralik[rand(0,2)];
            for($j=0; $j < 5 ; $j++ ){
                DB::table('vet_calisma')->insert([
                    'vet_id' => $userID,
                    'gun' => $j+1,
                    'randevu_bas' => $rand_bas[rand(0,3)].':00',
                    'randevu_bit' => $rand_bit[rand(0,3)].':00',
                    'randevu_aralik' => $r_aralik,
                ]);

            }

            for($x = 0; $x < 20 ; $x++ ){
                $tarih = $faker->unique()->dateTimeBetween('2023-05-15', '2023-06-13');
                $tarih->format('Y-m-d');
                DB::table('randevu')->insert([
                    'user_id' => rand(4,104),
                    'vet_id' => $userID,
                    'randevu_saat' => $rand_randevu[rand(0,4)].':'.$r_aralik,
                    'randevu_tarih' => $tarih,
                    'onay' => rand(0,1),
                ]);
            }
            }
        }

    }
}
