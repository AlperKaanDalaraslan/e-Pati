<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'username' => 'Admin2',
            'name'=>'Admin2',
            'surname' =>'Admin2',
            'email'=>'admin2@gmail.com',
            'user_image' => '.png',
            'tel' => '0533 333 3333',
            'password' => Hash::make('147258369'),

        ]);


    }
}
