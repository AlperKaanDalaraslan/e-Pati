<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'status' => 1,
            'username' => 'Admin',
            'name'=>'Admin',
            'surname' =>'Admin',
            'email'=>'admin@gmail.com',
            'user_image' => 'admin.png',
            'tel' => '0555 555 55 55',
            'password' => Hash::make('123456789'),

        ]);

        DB::table('users')->insert([
            'status' => 0,
            'username' => 'Admin1',
            'name'=>'Admin1',
            'surname' =>'Admin1',
            'email'=>'admin1@gmail.com',
            'user_image' => 'admin.png',
            'tel' => '0522 222 2222',
            'password' => Hash::make('987654321'),

        ]);

        DB::table('users')->insert([
            'status' =>0,
            'username' => 'Admin2',
            'name'=>'Admin2',
            'surname' =>'Admin2',
            'email'=>'admin2@gmail.com',
            'user_image' => '.png',
            'tel' => '0533 333 3333',
            'password' => Hash::make('147258369'),

        ]);

        function rand_tel()
        {
            $prefixes = ['0505', '0506', '0507', '0509', '0530', '0532', '0533', '0534', '0535', '0536', '0537', '0538', '0539', '0540', '0541', '0542', '0543', '0544', '0545', '0546', '0547', '0548', '0549', '0550', '0551', '0552', '0553', '0554', '0555', '0556', '0557', '0558', '0559', '0560', '0561', '0562', '0563', '0564', '0565', '0566', '0567', '0568', '0569', '0570', '0571', '0572', '0573', '0574', '0575', '0576', '0577', '0578', '0579', '0580', '0581', '0582', '0583', '0584', '0585', '0586', '0587', '0588', '0589', '0590', '0591', '0592', '0593', '0594', '0595', '0596', '0597', '0598', '0599'];

            $prefix = $prefixes[array_rand($prefixes)];
            $number = mt_rand(1000000, 9999999);

            return $prefix . $number;
        }

        $faker = Faker::create();
        $faker->locale('tr_TR');
        for ($i = 0; $i< 100; $i++) {
            DB::table('users')->insertGetId([
                'status' => 1,
                'username' => $faker->unique()->userName,
                'email' => $faker->email,
                'name' => $faker->unique()->firstName,
                'surname' => $faker->lastName,
                'user_image' => $faker->imageUrl($width = 640, $height = 480),
                'tel' => rand_tel(),
                'password' => Hash::make('123456789'),
            ]);
        }

    }
}
