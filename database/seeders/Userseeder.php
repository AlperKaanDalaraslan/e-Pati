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
            'username' => 'Admin',
            'name'=>'Admin',
            'surname' =>'Admin',
            'email'=>'admin@gmail.com',
            'user_image' => 'admin.png',
            'tel' => '0555 555 55 55',
            'password' => Hash::make('123456789'),

        ]);    }
}
