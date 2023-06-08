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
        $randevuSayisi = Randevu::where('onay', 1)
            ->whereDate('randevu_tarih', $today)
            ->whereTime('randevu_saat', '<', $now)
            ->orWhere(function ($query) use ($today, $now) {
                $query->whereDate('randevu_tarih', '<', $today);
            })
            ->where('onay', 1)
            ->count();
        $sayac_guncelle = Sayac::find(1);
        $sayac_guncelle->randevu = $randevuSayisi;
        $sayac_guncelle->save();

        $this->info('Veteriner sayaç başarıyla güncellendi: ' . $randevuSayisi);
    }
}
