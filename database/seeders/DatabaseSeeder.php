<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(Userseeder::class);
//        DB::table('iller')->truncate();
//        Db::table('ilce')->truncate();

            $cities = [
                ['id' => 1, 'title' => 'Adana'],
                ['id' => 2, 'title' => 'Adıyaman'],
                ['id' => 3, 'title' => 'Afyonkarahisar'],
                ['id' => 4, 'title' => 'Ağrı'],
                ['id' => 5, 'title' => 'Amasya'],
                ['id' => 6, 'title' => 'Ankara',],
                ['id' => 7, 'title' => 'Antalya'],
                ['id' => 8, 'title' => 'Artvin'],
                ['id' => 9, 'title' => 'Aydın'],
                ['id' => 10, 'title' => 'Balıkesir'],
                ['id' => 11, 'title' => 'Bilecik'],
                ['id' => 12, 'title' => 'Bingöl'],
                ['id' => 13, 'title' => 'Bitlis'],
                ['id' => 14, 'title' => 'Bolu'],
                ['id' => 15, 'title' => 'Burdur'],
                ['id' => 16, 'title' => 'Bursa'],
                ['id' => 17, 'title' => 'Çanakkale'],
                ['id' => 18, 'title' => 'Çankırı'],
                ['id' => 19, 'title' => 'Çorum'],
                ['id' => 20, 'title' => 'Denizli'],
                ['id' => 21, 'title' => 'Diyarbakır', ],
                ['id' => 22, 'title' => 'Edirne',],
                ['id' => 23, 'title' => 'Elazığ'],
                ['id' => 24, 'title' => 'Erzincan',],
                ['id' => 25, 'title' => 'Erzurum'],
                ['id' => 26, 'title' => 'Eskişehir'],
                ['id' => 27, 'title' => 'Gaziantep'],
                ['id' => 28, 'title' => 'Giresun'],
                ['id' => 29, 'title' => 'Gümüşhane'],
                ['id' => 30, 'title' => 'Hakkari'],
                ['id' => 31, 'title' => 'Hatay'],
                ['id' => 32, 'title' => 'Isparta'],
                ['id' => 33, 'title' => 'Mersin'],
                ['id' => 34, 'title' => 'İstanbul'],
                ['id' => 35, 'title' => 'İzmir'],
                ['id' => 36, 'title' => 'Kars'],
                ['id' => 37, 'title' => 'Kastamonu'],
                ['id' => 38, 'title' => 'Kayseri'],
                ['id' => 39, 'title' => 'Kırklareli'],
                ['id' => 40, 'title' => 'Kırşehir'],
                ['id' => 41, 'title' => 'Kocaeli'],
                ['id' => 42, 'title' => 'Konya'],
                ['id' => 43, 'title' => 'Kütahya'],
                ['id' => 44, 'title' => 'Malatya'],
                ['id' => 45, 'title' => 'Manisa'],
                ['id' => 46, 'title' => 'Kahramanmaraş'],
                ['id' => 47, 'title' => 'Mardin'],
                ['id' => 48, 'title' => 'Muğla'],
                ['id' => 49, 'title' => 'Muş'],
                ['id' => 50, 'title' => 'Nevşehir'],
                ['id' => 51, 'title' => 'Niğde'],
                ['id' => 52, 'title' => 'Ordu'],
                ['id' => 53, 'title' => 'Rize'],
                ['id' => 54, 'title' => 'Sakarya'],
                ['id' => 55, 'title' => 'Samsun'],
                ['id' => 56, 'title' => 'Siirt'],
                ['id' => 57, 'title' => 'Sinop'],
                ['id' => 58, 'title' => 'Sivas'],
                ['id' => 59, 'title' => 'Tekirdağ'],
                ['id' => 60, 'title' => 'Tokat'],
                ['id' => 61, 'title' => 'Trabzon'],
                ['id' => 62, 'title' => 'Tunceli'],
                ['id' => 63, 'title' => 'Şanlıurfa'],
                ['id' => 64, 'title' => 'Uşak'],
                ['id' => 65, 'title' => 'Van'],
                ['id' => 66, 'title' => 'Yozgat'],
                ['id' => 67, 'title' => 'Zonguldak'],
                ['id' => 68, 'title' => 'Aksaray'],
                ['id' => 69, 'title' => 'Bayburt'],
                ['id' => 70, 'title' => 'Karaman'],
                ['id' => 71, 'title' => 'Kırıkkale'],
                ['id' => 72, 'title' => 'Batman'],
                ['id' => 73, 'title' => 'Şırnak'],
                ['id' => 74, 'title' => 'Bartın'],
                ['id' => 75, 'title' => 'Ardahan'],
                ['id' => 76, 'title' => 'Iğdır'],
                ['id' => 77, 'title' => 'Yalova'],
                ['id' => 78, 'title' => 'Karabük'],
                ['id' => 79, 'title' => 'Kilis'],
                ['id' => 80, 'title' => 'Osmaniye'],
                ['id' => 81, 'title' => 'Düzce']
            ];
        DB::table('iller')->insert($cities);
        $this->call(IlceSeeder::class);
       $this->call(SahiplenSeeder::class);
       $this->call(KayipSeeder::class);
       $this->call(EsBulmaSeeder::class);
       $this->call(VeterinerSeeder::class);
       $this->call((TurSeeder::class));
    }
}
