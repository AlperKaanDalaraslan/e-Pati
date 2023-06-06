<?php

namespace App\Console\Commands;

use App\Models\Randevu;
use App\Models\Sayac;
use Carbon\Carbon;
use Illuminate\Console\Command;

class VeterinerSayacGuncelle extends Command
{

    protected $signature = 'sayac:guncelle';


    protected $description = 'Randevu Sayac Basarıyla Guncellendi';

    public function handle()
    {
        $today = Carbon::today();
        $now = Carbon::now()->format('H:i');
        $randevular = Randevu::where('onay',1)
            ->where('randevu_tarih', '<=',$today)
            ->where('randevu_saat','<=',$now)
            ->get();
        $sayac = $randevular->count();

        $sayac_guncelle = Sayac::find(1);
        $sayac_guncelle->randevu = $sayac;
        $sayac_guncelle->save();

        $this->info('Veteriner sayaç başarıyla güncellendi: ' . $sayac);
    }
}
