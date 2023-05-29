<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ilceler;
use Illuminate\Support\Facades\DB;

class IlceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      //  DB::table('ilceler')->truncate();

        ilceler::create( [
            'id'=>1,
            'il_id'=>1,
            'ilce_ad'=>'Aladağ(Karsantı)'
        ] );



        ilceler::create( [
            'id'=>2,
            'il_id'=>1,
            'ilce_ad'=>'Ceyhan'
        ] );



        ilceler::create( [
            'id'=>3,
            'il_id'=>1,
            'ilce_ad'=>'Çukurova'
        ] );



        ilceler::create( [
            'id'=>4,
            'il_id'=>1,
            'ilce_ad'=>'Feke'
        ] );



        ilceler::create( [
            'id'=>5,
            'il_id'=>1,
            'ilce_ad'=>'İmamoğlu'
        ] );



        ilceler::create( [
            'id'=>6,
            'il_id'=>1,
            'ilce_ad'=>'Karaisalı'
        ] );



        ilceler::create( [
            'id'=>7,
            'il_id'=>1,
            'ilce_ad'=>'Karataş'
        ] );



        ilceler::create( [
            'id'=>8,
            'il_id'=>1,
            'ilce_ad'=>'Kozan'
        ] );



        ilceler::create( [
            'id'=>9,
            'il_id'=>1,
            'ilce_ad'=>'Pozantı'
        ] );



        ilceler::create( [
            'id'=>10,
            'il_id'=>1,
            'ilce_ad'=>'Saimbeyli'
        ] );



        ilceler::create( [
            'id'=>11,
            'il_id'=>1,
            'ilce_ad'=>'Sarıçam'
        ] );



        ilceler::create( [
            'id'=>12,
            'il_id'=>1,
            'ilce_ad'=>'SEYHAN'
        ] );



        ilceler::create( [
            'id'=>13,
            'il_id'=>1,
            'ilce_ad'=>'Tufanbeyli'
        ] );



        ilceler::create( [
            'id'=>14,
            'il_id'=>1,
            'ilce_ad'=>'Yumurtalık'
        ] );



        ilceler::create( [
            'id'=>15,
            'il_id'=>1,
            'ilce_ad'=>'Yüreğir'
        ] );



        ilceler::create( [
            'id'=>16,
            'il_id'=>2,
            'ilce_ad'=>'ADIYAMAN'
        ] );



        ilceler::create( [
            'id'=>17,
            'il_id'=>2,
            'ilce_ad'=>'Besni'
        ] );



        ilceler::create( [
            'id'=>18,
            'il_id'=>2,
            'ilce_ad'=>'Çelikhan'
        ] );



        ilceler::create( [
            'id'=>19,
            'il_id'=>2,
            'ilce_ad'=>'Gerger'
        ] );



        ilceler::create( [
            'id'=>20,
            'il_id'=>2,
            'ilce_ad'=>'Gölbaşı'
        ] );



        ilceler::create( [
            'id'=>21,
            'il_id'=>2,
            'ilce_ad'=>'Kahta'
        ] );



        ilceler::create( [
            'id'=>22,
            'il_id'=>2,
            'ilce_ad'=>'Samsat'
        ] );



        ilceler::create( [
            'id'=>23,
            'il_id'=>2,
            'ilce_ad'=>'Sincik'
        ] );



        ilceler::create( [
            'id'=>24,
            'il_id'=>2,
            'ilce_ad'=>'Tut'
        ] );



        ilceler::create( [
            'id'=>25,
            'il_id'=>3,
            'ilce_ad'=>'AFYONKARAHİSAR'
        ] );



        ilceler::create( [
            'id'=>26,
            'il_id'=>3,
            'ilce_ad'=>'Başmakçı'
        ] );



        ilceler::create( [
            'id'=>27,
            'il_id'=>3,
            'ilce_ad'=>'Bayat'
        ] );



        ilceler::create( [
            'id'=>28,
            'il_id'=>3,
            'ilce_ad'=>'Bolvadin'
        ] );



        ilceler::create( [
            'id'=>29,
            'il_id'=>3,
            'ilce_ad'=>'Çay'
        ] );



        ilceler::create( [
            'id'=>30,
            'il_id'=>3,
            'ilce_ad'=>'Çobanlar'
        ] );



        ilceler::create( [
            'id'=>31,
            'il_id'=>3,
            'ilce_ad'=>'Dazkırı'
        ] );



        ilceler::create( [
            'id'=>32,
            'il_id'=>3,
            'ilce_ad'=>'Dinar'
        ] );



        ilceler::create( [
            'id'=>33,
            'il_id'=>3,
            'ilce_ad'=>'Emirdağ'
        ] );



        ilceler::create( [
            'id'=>34,
            'il_id'=>3,
            'ilce_ad'=>'Evciler'
        ] );



        ilceler::create( [
            'id'=>35,
            'il_id'=>3,
            'ilce_ad'=>'Hocalar'
        ] );



        ilceler::create( [
            'id'=>36,
            'il_id'=>3,
            'ilce_ad'=>'İhsaniye'
        ] );



        ilceler::create( [
            'id'=>37,
            'il_id'=>3,
            'ilce_ad'=>'İscehisar'
        ] );



        ilceler::create( [
            'id'=>38,
            'il_id'=>3,
            'ilce_ad'=>'Kızılören'
        ] );



        ilceler::create( [
            'id'=>39,
            'il_id'=>3,
            'ilce_ad'=>'Sandıklı'
        ] );



        ilceler::create( [
            'id'=>40,
            'il_id'=>3,
            'ilce_ad'=>'Sincanlı(Sinanpaşa)'
        ] );



        ilceler::create( [
            'id'=>41,
            'il_id'=>3,
            'ilce_ad'=>'Sultandağı'
        ] );



        ilceler::create( [
            'id'=>42,
            'il_id'=>3,
            'ilce_ad'=>'Şuhut'
        ] );



        ilceler::create( [
            'id'=>43,
            'il_id'=>4,
            'ilce_ad'=>'Ağrı'
        ] );



        ilceler::create( [
            'id'=>44,
            'il_id'=>4,
            'ilce_ad'=>'Diyadin'
        ] );



        ilceler::create( [
            'id'=>45,
            'il_id'=>4,
            'ilce_ad'=>'Doğubeyazıt'
        ] );



        ilceler::create( [
            'id'=>46,
            'il_id'=>4,
            'ilce_ad'=>'Eleşkirt'
        ] );



        ilceler::create( [
            'id'=>47,
            'il_id'=>4,
            'ilce_ad'=>'Hamur'
        ] );



        ilceler::create( [
            'id'=>48,
            'il_id'=>4,
            'ilce_ad'=>'Patnos'
        ] );



        ilceler::create( [
            'id'=>49,
            'il_id'=>4,
            'ilce_ad'=>'Taşlıçay'
        ] );



        ilceler::create( [
            'id'=>50,
            'il_id'=>4,
            'ilce_ad'=>'Tutak'
        ] );



        ilceler::create( [
            'id'=>51,
            'il_id'=>5,
            'ilce_ad'=>'Amasya'
        ] );



        ilceler::create( [
            'id'=>52,
            'il_id'=>5,
            'ilce_ad'=>'Göynücek'
        ] );



        ilceler::create( [
            'id'=>53,
            'il_id'=>5,
            'ilce_ad'=>'Gümüşhacıköy'
        ] );



        ilceler::create( [
            'id'=>54,
            'il_id'=>5,
            'ilce_ad'=>'Hamamözü'
        ] );



        ilceler::create( [
            'id'=>55,
            'il_id'=>5,
            'ilce_ad'=>'Merzifon'
        ] );



        ilceler::create( [
            'id'=>56,
            'il_id'=>5,
            'ilce_ad'=>'Suluova'
        ] );



        ilceler::create( [
            'id'=>57,
            'il_id'=>5,
            'ilce_ad'=>'Taşova'
        ] );



        ilceler::create( [
            'id'=>58,
            'il_id'=>6,
            'ilce_ad'=>'Akyurt'
        ] );



        ilceler::create( [
            'id'=>59,
            'il_id'=>6,
            'ilce_ad'=>'Altındağ'
        ] );



        ilceler::create( [
            'id'=>60,
            'il_id'=>6,
            'ilce_ad'=>'Ayaş'
        ] );



        ilceler::create( [
            'id'=>61,
            'il_id'=>6,
            'ilce_ad'=>'Bala'
        ] );



        ilceler::create( [
            'id'=>62,
            'il_id'=>6,
            'ilce_ad'=>'Beypazarı'
        ] );



        ilceler::create( [
            'id'=>63,
            'il_id'=>6,
            'ilce_ad'=>'Çamlıdere'
        ] );



        ilceler::create( [
            'id'=>64,
            'il_id'=>6,
            'ilce_ad'=>'ÇANKAYA'
        ] );



        ilceler::create( [
            'id'=>65,
            'il_id'=>6,
            'ilce_ad'=>'Çubuk'
        ] );



        ilceler::create( [
            'id'=>66,
            'il_id'=>6,
            'ilce_ad'=>'Elmadağ'
        ] );



        ilceler::create( [
            'id'=>67,
            'il_id'=>6,
            'ilce_ad'=>'ETİMESGUT'
        ] );



        ilceler::create( [
            'id'=>68,
            'il_id'=>6,
            'ilce_ad'=>'Evren'
        ] );



        ilceler::create( [
            'id'=>69,
            'il_id'=>6,
            'ilce_ad'=>'GÖLBAŞI'
        ] );



        ilceler::create( [
            'id'=>70,
            'il_id'=>6,
            'ilce_ad'=>'Güdül'
        ] );



        ilceler::create( [
            'id'=>71,
            'il_id'=>6,
            'ilce_ad'=>'Haymana'
        ] );



        ilceler::create( [
            'id'=>72,
            'il_id'=>6,
            'ilce_ad'=>'Kalecik'
        ] );



        ilceler::create( [
            'id'=>73,
            'il_id'=>6,
            'ilce_ad'=>'Kazan'
        ] );



        ilceler::create( [
            'id'=>74,
            'il_id'=>6,
            'ilce_ad'=>'KEÇİÖREN'
        ] );



        ilceler::create( [
            'id'=>75,
            'il_id'=>6,
            'ilce_ad'=>'Kızılcahamam'
        ] );



        ilceler::create( [
            'id'=>76,
            'il_id'=>6,
            'ilce_ad'=>'MAMAK'
        ] );



        ilceler::create( [
            'id'=>77,
            'il_id'=>6,
            'ilce_ad'=>'Nallıhan'
        ] );



        ilceler::create( [
            'id'=>78,
            'il_id'=>6,
            'ilce_ad'=>'Polatlı'
        ] );



        ilceler::create( [
            'id'=>79,
            'il_id'=>6,
            'ilce_ad'=>'PURSAKLAR'
        ] );



        ilceler::create( [
            'id'=>80,
            'il_id'=>6,
            'ilce_ad'=>'SİNCAN'
        ] );



        ilceler::create( [
            'id'=>81,
            'il_id'=>6,
            'ilce_ad'=>'Şereflikoçhisar'
        ] );



        ilceler::create( [
            'id'=>82,
            'il_id'=>6,
            'ilce_ad'=>'YENİMAHALLE'
        ] );



        ilceler::create( [
            'id'=>83,
            'il_id'=>7,
            'ilce_ad'=>'Akseki'
        ] );



        ilceler::create( [
            'id'=>84,
            'il_id'=>7,
            'ilce_ad'=>'Aksu'
        ] );



        ilceler::create( [
            'id'=>85,
            'il_id'=>7,
            'ilce_ad'=>'Alanya'
        ] );



        ilceler::create( [
            'id'=>86,
            'il_id'=>7,
            'ilce_ad'=>'DÖŞEMEALTI'
        ] );



        ilceler::create( [
            'id'=>87,
            'il_id'=>7,
            'ilce_ad'=>'Elmalı'
        ] );



        ilceler::create( [
            'id'=>88,
            'il_id'=>7,
            'ilce_ad'=>'Finike'
        ] );



        ilceler::create( [
            'id'=>89,
            'il_id'=>7,
            'ilce_ad'=>'Gazipaşa'
        ] );



        ilceler::create( [
            'id'=>90,
            'il_id'=>7,
            'ilce_ad'=>'Gündoğmuş'
        ] );



        ilceler::create( [
            'id'=>91,
            'il_id'=>7,
            'ilce_ad'=>'İbradı(Aydınkent)'
        ] );



        ilceler::create( [
            'id'=>92,
            'il_id'=>7,
            'ilce_ad'=>'Kale(Demre)'
        ] );



        ilceler::create( [
            'id'=>93,
            'il_id'=>7,
            'ilce_ad'=>'Kaş'
        ] );



        ilceler::create( [
            'id'=>94,
            'il_id'=>7,
            'ilce_ad'=>'Kemer'
        ] );



        ilceler::create( [
            'id'=>95,
            'il_id'=>7,
            'ilce_ad'=>'KEPEZ'
        ] );



        ilceler::create( [
            'id'=>96,
            'il_id'=>7,
            'ilce_ad'=>'KONYAALTI'
        ] );



        ilceler::create( [
            'id'=>97,
            'il_id'=>7,
            'ilce_ad'=>'Korkuteli'
        ] );



        ilceler::create( [
            'id'=>98,
            'il_id'=>7,
            'ilce_ad'=>'Kumluca'
        ] );



        ilceler::create( [
            'id'=>99,
            'il_id'=>7,
            'ilce_ad'=>'Manavgat'
        ] );



        ilceler::create( [
            'id'=>100,
            'il_id'=>7,
            'ilce_ad'=>'Muratpaşa'
        ] );



        ilceler::create( [
            'id'=>101,
            'il_id'=>7,
            'ilce_ad'=>'Serik'
        ] );



        ilceler::create( [
            'id'=>102,
            'il_id'=>8,
            'ilce_ad'=>'Ardanuç'
        ] );



        ilceler::create( [
            'id'=>103,
            'il_id'=>8,
            'ilce_ad'=>'Arhavi'
        ] );



        ilceler::create( [
            'id'=>104,
            'il_id'=>8,
            'ilce_ad'=>'Artvin'
        ] );



        ilceler::create( [
            'id'=>105,
            'il_id'=>8,
            'ilce_ad'=>'Borçka'
        ] );



        ilceler::create( [
            'id'=>106,
            'il_id'=>8,
            'ilce_ad'=>'Hopa'
        ] );



        ilceler::create( [
            'id'=>107,
            'il_id'=>8,
            'ilce_ad'=>'Murgul(Göktaş)'
        ] );



        ilceler::create( [
            'id'=>108,
            'il_id'=>8,
            'ilce_ad'=>'Şavşat'
        ] );



        ilceler::create( [
            'id'=>109,
            'il_id'=>8,
            'ilce_ad'=>'Yusufeli'
        ] );



        ilceler::create( [
            'id'=>110,
            'il_id'=>9,
            'ilce_ad'=>'Aydın'
        ] );



        ilceler::create( [
            'id'=>111,
            'il_id'=>9,
            'ilce_ad'=>'Bozdoğan'
        ] );



        ilceler::create( [
            'id'=>112,
            'il_id'=>9,
            'ilce_ad'=>'Buharkent(Çubukdağı)'
        ] );



        ilceler::create( [
            'id'=>113,
            'il_id'=>9,
            'ilce_ad'=>'Çine'
        ] );



        ilceler::create( [
            'id'=>114,
            'il_id'=>9,
            'ilce_ad'=>'Didim(Yenihisar)'
        ] );



        ilceler::create( [
            'id'=>115,
            'il_id'=>9,
            'ilce_ad'=>'Germencik'
        ] );



        ilceler::create( [
            'id'=>116,
            'il_id'=>9,
            'ilce_ad'=>'İncirliova'
        ] );



        ilceler::create( [
            'id'=>117,
            'il_id'=>9,
            'ilce_ad'=>'Karacasu'
        ] );



        ilceler::create( [
            'id'=>118,
            'il_id'=>9,
            'ilce_ad'=>'Karpuzlu'
        ] );



        ilceler::create( [
            'id'=>119,
            'il_id'=>9,
            'ilce_ad'=>'Koçarlı'
        ] );



        ilceler::create( [
            'id'=>120,
            'il_id'=>9,
            'ilce_ad'=>'Köşk'
        ] );



        ilceler::create( [
            'id'=>121,
            'il_id'=>9,
            'ilce_ad'=>'Kuşadası'
        ] );



        ilceler::create( [
            'id'=>122,
            'il_id'=>9,
            'ilce_ad'=>'Kuyucak'
        ] );



        ilceler::create( [
            'id'=>123,
            'il_id'=>9,
            'ilce_ad'=>'NAZİLLİ'
        ] );



        ilceler::create( [
            'id'=>124,
            'il_id'=>9,
            'ilce_ad'=>'Söke'
        ] );



        ilceler::create( [
            'id'=>125,
            'il_id'=>9,
            'ilce_ad'=>'Sultanhisar'
        ] );



        ilceler::create( [
            'id'=>126,
            'il_id'=>9,
            'ilce_ad'=>'Yenipazar'
        ] );



        ilceler::create( [
            'id'=>127,
            'il_id'=>10,
            'ilce_ad'=>'Ayvalık'
        ] );



        ilceler::create( [
            'id'=>128,
            'il_id'=>10,
            'ilce_ad'=>'Balıkesir'
        ] );



        ilceler::create( [
            'id'=>129,
            'il_id'=>10,
            'ilce_ad'=>'Balya'
        ] );



        ilceler::create( [
            'id'=>130,
            'il_id'=>10,
            'ilce_ad'=>'Bandırma'
        ] );



        ilceler::create( [
            'id'=>131,
            'il_id'=>10,
            'ilce_ad'=>'Bigadiç'
        ] );



        ilceler::create( [
            'id'=>132,
            'il_id'=>10,
            'ilce_ad'=>'Burhaniye'
        ] );



        ilceler::create( [
            'id'=>133,
            'il_id'=>10,
            'ilce_ad'=>'Dursunbey'
        ] );



        ilceler::create( [
            'id'=>134,
            'il_id'=>10,
            'ilce_ad'=>'Edremit'
        ] );



        ilceler::create( [
            'id'=>135,
            'il_id'=>10,
            'ilce_ad'=>'Erdek'
        ] );



        ilceler::create( [
            'id'=>136,
            'il_id'=>10,
            'ilce_ad'=>'Gömeç'
        ] );



        ilceler::create( [
            'id'=>137,
            'il_id'=>10,
            'ilce_ad'=>'Gönen'
        ] );



        ilceler::create( [
            'id'=>138,
            'il_id'=>10,
            'ilce_ad'=>'Havran'
        ] );



        ilceler::create( [
            'id'=>139,
            'il_id'=>10,
            'ilce_ad'=>'İvrindi'
        ] );



        ilceler::create( [
            'id'=>140,
            'il_id'=>10,
            'ilce_ad'=>'Kepsut'
        ] );



        ilceler::create( [
            'id'=>141,
            'il_id'=>10,
            'ilce_ad'=>'Manyas'
        ] );



        ilceler::create( [
            'id'=>142,
            'il_id'=>10,
            'ilce_ad'=>'Marmara'
        ] );



        ilceler::create( [
            'id'=>143,
            'il_id'=>10,
            'ilce_ad'=>'Savaştepe'
        ] );



        ilceler::create( [
            'id'=>144,
            'il_id'=>10,
            'ilce_ad'=>'Sındırgı'
        ] );



        ilceler::create( [
            'id'=>145,
            'il_id'=>10,
            'ilce_ad'=>'Susurluk'
        ] );



        ilceler::create( [
            'id'=>146,
            'il_id'=>11,
            'ilce_ad'=>'Bilecik'
        ] );



        ilceler::create( [
            'id'=>147,
            'il_id'=>11,
            'ilce_ad'=>'Bozüyük'
        ] );



        ilceler::create( [
            'id'=>148,
            'il_id'=>11,
            'ilce_ad'=>'Gölpazarı'
        ] );



        ilceler::create( [
            'id'=>149,
            'il_id'=>11,
            'ilce_ad'=>'İnhisar'
        ] );



        ilceler::create( [
            'id'=>150,
            'il_id'=>11,
            'ilce_ad'=>'Osmaneli'
        ] );



        ilceler::create( [
            'id'=>151,
            'il_id'=>11,
            'ilce_ad'=>'Pazaryeri'
        ] );



        ilceler::create( [
            'id'=>152,
            'il_id'=>11,
            'ilce_ad'=>'Söğüt'
        ] );



        ilceler::create( [
            'id'=>153,
            'il_id'=>11,
            'ilce_ad'=>'Yenipazar'
        ] );



        ilceler::create( [
            'id'=>154,
            'il_id'=>12,
            'ilce_ad'=>'Adaklı'
        ] );



        ilceler::create( [
            'id'=>155,
            'il_id'=>12,
            'ilce_ad'=>'Bingöl'
        ] );



        ilceler::create( [
            'id'=>156,
            'il_id'=>12,
            'ilce_ad'=>'Genç'
        ] );



        ilceler::create( [
            'id'=>157,
            'il_id'=>12,
            'ilce_ad'=>'Karlıova'
        ] );



        ilceler::create( [
            'id'=>158,
            'il_id'=>12,
            'ilce_ad'=>'Kığı'
        ] );



        ilceler::create( [
            'id'=>159,
            'il_id'=>12,
            'ilce_ad'=>'Solhan'
        ] );



        ilceler::create( [
            'id'=>160,
            'il_id'=>12,
            'ilce_ad'=>'Yayladere'
        ] );



        ilceler::create( [
            'id'=>161,
            'il_id'=>12,
            'ilce_ad'=>'Yedisu'
        ] );



        ilceler::create( [
            'id'=>162,
            'il_id'=>13,
            'ilce_ad'=>'Adilcevaz'
        ] );



        ilceler::create( [
            'id'=>163,
            'il_id'=>13,
            'ilce_ad'=>'Ahlat'
        ] );



        ilceler::create( [
            'id'=>164,
            'il_id'=>13,
            'ilce_ad'=>'Bitlis'
        ] );



        ilceler::create( [
            'id'=>165,
            'il_id'=>13,
            'ilce_ad'=>'Güroymak'
        ] );



        ilceler::create( [
            'id'=>166,
            'il_id'=>13,
            'ilce_ad'=>'Hizan'
        ] );



        ilceler::create( [
            'id'=>167,
            'il_id'=>13,
            'ilce_ad'=>'Mutki'
        ] );



        ilceler::create( [
            'id'=>168,
            'il_id'=>13,
            'ilce_ad'=>'Tatvan'
        ] );



        ilceler::create( [
            'id'=>169,
            'il_id'=>14,
            'ilce_ad'=>'BOLU'
        ] );



        ilceler::create( [
            'id'=>170,
            'il_id'=>14,
            'ilce_ad'=>'Dörtdivan'
        ] );



        ilceler::create( [
            'id'=>171,
            'il_id'=>14,
            'ilce_ad'=>'Gerede'
        ] );



        ilceler::create( [
            'id'=>172,
            'il_id'=>14,
            'ilce_ad'=>'Göynük'
        ] );



        ilceler::create( [
            'id'=>173,
            'il_id'=>14,
            'ilce_ad'=>'Kıbrıscık'
        ] );



        ilceler::create( [
            'id'=>174,
            'il_id'=>14,
            'ilce_ad'=>'Mengen'
        ] );



        ilceler::create( [
            'id'=>175,
            'il_id'=>14,
            'ilce_ad'=>'Mudurnu'
        ] );



        ilceler::create( [
            'id'=>176,
            'il_id'=>14,
            'ilce_ad'=>'Seben'
        ] );



        ilceler::create( [
            'id'=>177,
            'il_id'=>14,
            'ilce_ad'=>'Yeniçağa'
        ] );



        ilceler::create( [
            'id'=>178,
            'il_id'=>15,
            'ilce_ad'=>'Ağlasun'
        ] );



        ilceler::create( [
            'id'=>179,
            'il_id'=>15,
            'ilce_ad'=>'Altınyayla(Dirmil)'
        ] );



        ilceler::create( [
            'id'=>180,
            'il_id'=>15,
            'ilce_ad'=>'Bucak'
        ] );



        ilceler::create( [
            'id'=>181,
            'il_id'=>15,
            'ilce_ad'=>'BURDUR'
        ] );



        ilceler::create( [
            'id'=>182,
            'il_id'=>15,
            'ilce_ad'=>'Çavdır'
        ] );



        ilceler::create( [
            'id'=>183,
            'il_id'=>15,
            'ilce_ad'=>'Çeltikçi'
        ] );



        ilceler::create( [
            'id'=>184,
            'il_id'=>15,
            'ilce_ad'=>'Gölhisar'
        ] );



        ilceler::create( [
            'id'=>185,
            'il_id'=>15,
            'ilce_ad'=>'Karamanlı'
        ] );



        ilceler::create( [
            'id'=>186,
            'il_id'=>15,
            'ilce_ad'=>'Kemer'
        ] );



        ilceler::create( [
            'id'=>187,
            'il_id'=>15,
            'ilce_ad'=>'Tefenni'
        ] );



        ilceler::create( [
            'id'=>188,
            'il_id'=>15,
            'ilce_ad'=>'Yeşilova'
        ] );



        ilceler::create( [
            'id'=>189,
            'il_id'=>16,
            'ilce_ad'=>'Büyükorhan'
        ] );



        ilceler::create( [
            'id'=>190,
            'il_id'=>16,
            'ilce_ad'=>'Gemlik'
        ] );



        ilceler::create( [
            'id'=>191,
            'il_id'=>16,
            'ilce_ad'=>'Gürsu'
        ] );



        ilceler::create( [
            'id'=>192,
            'il_id'=>16,
            'ilce_ad'=>'Harmancık'
        ] );



        ilceler::create( [
            'id'=>193,
            'il_id'=>16,
            'ilce_ad'=>'İnegöl'
        ] );



        ilceler::create( [
            'id'=>194,
            'il_id'=>16,
            'ilce_ad'=>'İznik'
        ] );



        ilceler::create( [
            'id'=>195,
            'il_id'=>16,
            'ilce_ad'=>'Karacabey'
        ] );



        ilceler::create( [
            'id'=>196,
            'il_id'=>16,
            'ilce_ad'=>'Keles'
        ] );



        ilceler::create( [
            'id'=>197,
            'il_id'=>16,
            'ilce_ad'=>'Kestel'
        ] );



        ilceler::create( [
            'id'=>198,
            'il_id'=>16,
            'ilce_ad'=>'MUDANYA'
        ] );



        ilceler::create( [
            'id'=>199,
            'il_id'=>16,
            'ilce_ad'=>'Mustafakemalpaşa'
        ] );



        ilceler::create( [
            'id'=>200,
            'il_id'=>16,
            'ilce_ad'=>'Nilüfer'
        ] );



        ilceler::create( [
            'id'=>201,
            'il_id'=>16,
            'ilce_ad'=>'Orhaneli'
        ] );



        ilceler::create( [
            'id'=>202,
            'il_id'=>16,
            'ilce_ad'=>'Orhangazi'
        ] );



        ilceler::create( [
            'id'=>203,
            'il_id'=>16,
            'ilce_ad'=>'OSMANGAZİ'
        ] );



        ilceler::create( [
            'id'=>204,
            'il_id'=>16,
            'ilce_ad'=>'Yenişehir'
        ] );



        ilceler::create( [
            'id'=>205,
            'il_id'=>16,
            'ilce_ad'=>'YILDIRIM'
        ] );



        ilceler::create( [
            'id'=>206,
            'il_id'=>17,
            'ilce_ad'=>'Ayvacık'
        ] );



        ilceler::create( [
            'id'=>207,
            'il_id'=>17,
            'ilce_ad'=>'Bayramiç'
        ] );



        ilceler::create( [
            'id'=>208,
            'il_id'=>17,
            'ilce_ad'=>'Biga'
        ] );



        ilceler::create( [
            'id'=>209,
            'il_id'=>17,
            'ilce_ad'=>'Bozcaada'
        ] );



        ilceler::create( [
            'id'=>210,
            'il_id'=>17,
            'ilce_ad'=>'Çan'
        ] );



        ilceler::create( [
            'id'=>211,
            'il_id'=>17,
            'ilce_ad'=>'Çanakkale'
        ] );



        ilceler::create( [
            'id'=>212,
            'il_id'=>17,
            'ilce_ad'=>'Eceabat'
        ] );



        ilceler::create( [
            'id'=>213,
            'il_id'=>17,
            'ilce_ad'=>'Ezine'
        ] );



        ilceler::create( [
            'id'=>214,
            'il_id'=>17,
            'ilce_ad'=>'Gelibolu'
        ] );



        ilceler::create( [
            'id'=>215,
            'il_id'=>17,
            'ilce_ad'=>'Gökçeada(İmroz)'
        ] );



        ilceler::create( [
            'id'=>216,
            'il_id'=>17,
            'ilce_ad'=>'Lapseki'
        ] );



        ilceler::create( [
            'id'=>217,
            'il_id'=>17,
            'ilce_ad'=>'Yenice'
        ] );



        ilceler::create( [
            'id'=>218,
            'il_id'=>18,
            'ilce_ad'=>'Atkaracalar'
        ] );



        ilceler::create( [
            'id'=>219,
            'il_id'=>18,
            'ilce_ad'=>'Bayramören'
        ] );



        ilceler::create( [
            'id'=>220,
            'il_id'=>18,
            'ilce_ad'=>'Çankırı'
        ] );



        ilceler::create( [
            'id'=>221,
            'il_id'=>18,
            'ilce_ad'=>'Çerkeş'
        ] );



        ilceler::create( [
            'id'=>222,
            'il_id'=>18,
            'ilce_ad'=>'Eldivan'
        ] );



        ilceler::create( [
            'id'=>223,
            'il_id'=>18,
            'ilce_ad'=>'Ilgaz'
        ] );



        ilceler::create( [
            'id'=>224,
            'il_id'=>18,
            'ilce_ad'=>'Kızılırmak'
        ] );



        ilceler::create( [
            'id'=>225,
            'il_id'=>18,
            'ilce_ad'=>'Korgun'
        ] );



        ilceler::create( [
            'id'=>226,
            'il_id'=>18,
            'ilce_ad'=>'Kurşunlu'
        ] );



        ilceler::create( [
            'id'=>227,
            'il_id'=>18,
            'ilce_ad'=>'Orta'
        ] );



        ilceler::create( [
            'id'=>228,
            'il_id'=>18,
            'ilce_ad'=>'Şabanözü'
        ] );



        ilceler::create( [
            'id'=>229,
            'il_id'=>18,
            'ilce_ad'=>'Yapraklı'
        ] );



        ilceler::create( [
            'id'=>230,
            'il_id'=>19,
            'ilce_ad'=>'Alaca'
        ] );



        ilceler::create( [
            'id'=>231,
            'il_id'=>19,
            'ilce_ad'=>'Bayat'
        ] );



        ilceler::create( [
            'id'=>232,
            'il_id'=>19,
            'ilce_ad'=>'Boğazkale'
        ] );



        ilceler::create( [
            'id'=>233,
            'il_id'=>19,
            'ilce_ad'=>'Çorum'
        ] );



        ilceler::create( [
            'id'=>234,
            'il_id'=>19,
            'ilce_ad'=>'Dodurga'
        ] );



        ilceler::create( [
            'id'=>235,
            'il_id'=>19,
            'ilce_ad'=>'İskilip'
        ] );



        ilceler::create( [
            'id'=>236,
            'il_id'=>19,
            'ilce_ad'=>'Kargı'
        ] );



        ilceler::create( [
            'id'=>237,
            'il_id'=>19,
            'ilce_ad'=>'Laçin'
        ] );



        ilceler::create( [
            'id'=>238,
            'il_id'=>19,
            'ilce_ad'=>'Mecitözü'
        ] );



        ilceler::create( [
            'id'=>239,
            'il_id'=>19,
            'ilce_ad'=>'Oğuzlar(Karaören)'
        ] );



        ilceler::create( [
            'id'=>240,
            'il_id'=>19,
            'ilce_ad'=>'Ortaköy'
        ] );



        ilceler::create( [
            'id'=>241,
            'il_id'=>19,
            'ilce_ad'=>'Osmancık'
        ] );



        ilceler::create( [
            'id'=>242,
            'il_id'=>19,
            'ilce_ad'=>'Sungurlu'
        ] );



        ilceler::create( [
            'id'=>243,
            'il_id'=>19,
            'ilce_ad'=>'Uğurludağ'
        ] );



        ilceler::create( [
            'id'=>244,
            'il_id'=>20,
            'ilce_ad'=>'Acıpayam'
        ] );



        ilceler::create( [
            'id'=>245,
            'il_id'=>20,
            'ilce_ad'=>'PAMUKKALE'
        ] );



        ilceler::create( [
            'id'=>246,
            'il_id'=>20,
            'ilce_ad'=>'Babadağ'
        ] );



        ilceler::create( [
            'id'=>247,
            'il_id'=>20,
            'ilce_ad'=>'Baklan'
        ] );



        ilceler::create( [
            'id'=>248,
            'il_id'=>20,
            'ilce_ad'=>'Bekilli'
        ] );



        ilceler::create( [
            'id'=>249,
            'il_id'=>20,
            'ilce_ad'=>'Beyağaç'
        ] );



        ilceler::create( [
            'id'=>250,
            'il_id'=>20,
            'ilce_ad'=>'Bozkurt'
        ] );



        ilceler::create( [
            'id'=>251,
            'il_id'=>20,
            'ilce_ad'=>'Buldan'
        ] );



        ilceler::create( [
            'id'=>252,
            'il_id'=>20,
            'ilce_ad'=>'Çal'
        ] );



        ilceler::create( [
            'id'=>253,
            'il_id'=>20,
            'ilce_ad'=>'Çameli'
        ] );



        ilceler::create( [
            'id'=>254,
            'il_id'=>20,
            'ilce_ad'=>'Çardak'
        ] );



        ilceler::create( [
            'id'=>255,
            'il_id'=>20,
            'ilce_ad'=>'Çivril'
        ] );



        ilceler::create( [
            'id'=>256,
            'il_id'=>20,
            'ilce_ad'=>'Denizli'
        ] );



        ilceler::create( [
            'id'=>257,
            'il_id'=>20,
            'ilce_ad'=>'Güney'
        ] );



        ilceler::create( [
            'id'=>258,
            'il_id'=>20,
            'ilce_ad'=>'Honaz'
        ] );



        ilceler::create( [
            'id'=>259,
            'il_id'=>20,
            'ilce_ad'=>'Kale'
        ] );



        ilceler::create( [
            'id'=>260,
            'il_id'=>20,
            'ilce_ad'=>'Sarayköy'
        ] );



        ilceler::create( [
            'id'=>261,
            'il_id'=>20,
            'ilce_ad'=>'Serinhisar'
        ] );



        ilceler::create( [
            'id'=>262,
            'il_id'=>20,
            'ilce_ad'=>'Tavas'
        ] );



        ilceler::create( [
            'id'=>263,
            'il_id'=>21,
            'ilce_ad'=>'Bağlar'
        ] );



        ilceler::create( [
            'id'=>264,
            'il_id'=>21,
            'ilce_ad'=>'Bismil'
        ] );



        ilceler::create( [
            'id'=>265,
            'il_id'=>21,
            'ilce_ad'=>'Çermik'
        ] );



        ilceler::create( [
            'id'=>266,
            'il_id'=>21,
            'ilce_ad'=>'Çınar'
        ] );



        ilceler::create( [
            'id'=>267,
            'il_id'=>21,
            'ilce_ad'=>'Çüngüş'
        ] );



        ilceler::create( [
            'id'=>268,
            'il_id'=>21,
            'ilce_ad'=>'Dicle'
        ] );



        ilceler::create( [
            'id'=>269,
            'il_id'=>21,
            'ilce_ad'=>'Eğil'
        ] );



        ilceler::create( [
            'id'=>270,
            'il_id'=>21,
            'ilce_ad'=>'Ergani'
        ] );



        ilceler::create( [
            'id'=>271,
            'il_id'=>21,
            'ilce_ad'=>'Hani'
        ] );



        ilceler::create( [
            'id'=>272,
            'il_id'=>21,
            'ilce_ad'=>'Hazro'
        ] );



        ilceler::create( [
            'id'=>273,
            'il_id'=>21,
            'ilce_ad'=>'Kayapınar'
        ] );



        ilceler::create( [
            'id'=>274,
            'il_id'=>21,
            'ilce_ad'=>'Kocaköy'
        ] );



        ilceler::create( [
            'id'=>275,
            'il_id'=>21,
            'ilce_ad'=>'Kulp'
        ] );



        ilceler::create( [
            'id'=>276,
            'il_id'=>21,
            'ilce_ad'=>'Lice'
        ] );



        ilceler::create( [
            'id'=>277,
            'il_id'=>21,
            'ilce_ad'=>'Silvan'
        ] );



        ilceler::create( [
            'id'=>278,
            'il_id'=>21,
            'ilce_ad'=>'Sur'
        ] );



        ilceler::create( [
            'id'=>279,
            'il_id'=>21,
            'ilce_ad'=>'Yenişehir'
        ] );



        ilceler::create( [
            'id'=>280,
            'il_id'=>22,
            'ilce_ad'=>'Edirne'
        ] );



        ilceler::create( [
            'id'=>281,
            'il_id'=>22,
            'ilce_ad'=>'Enez'
        ] );



        ilceler::create( [
            'id'=>282,
            'il_id'=>22,
            'ilce_ad'=>'Havsa'
        ] );



        ilceler::create( [
            'id'=>283,
            'il_id'=>22,
            'ilce_ad'=>'İpsala'
        ] );



        ilceler::create( [
            'id'=>284,
            'il_id'=>22,
            'ilce_ad'=>'Keşan'
        ] );



        ilceler::create( [
            'id'=>285,
            'il_id'=>22,
            'ilce_ad'=>'Lalapaşa'
        ] );



        ilceler::create( [
            'id'=>286,
            'il_id'=>22,
            'ilce_ad'=>'Meriç'
        ] );



        ilceler::create( [
            'id'=>287,
            'il_id'=>22,
            'ilce_ad'=>'Süleoğlu(Süloğlu)'
        ] );



        ilceler::create( [
            'id'=>288,
            'il_id'=>22,
            'ilce_ad'=>'Uzunköprü'
        ] );



        ilceler::create( [
            'id'=>289,
            'il_id'=>23,
            'ilce_ad'=>'Ağın'
        ] );



        ilceler::create( [
            'id'=>290,
            'il_id'=>23,
            'ilce_ad'=>'Alacakaya'
        ] );



        ilceler::create( [
            'id'=>291,
            'il_id'=>23,
            'ilce_ad'=>'Arıcak'
        ] );



        ilceler::create( [
            'id'=>292,
            'il_id'=>23,
            'ilce_ad'=>'Baskil'
        ] );



        ilceler::create( [
            'id'=>293,
            'il_id'=>23,
            'ilce_ad'=>'ELAZIĞ'
        ] );



        ilceler::create( [
            'id'=>294,
            'il_id'=>23,
            'ilce_ad'=>'Karakoçan'
        ] );



        ilceler::create( [
            'id'=>295,
            'il_id'=>23,
            'ilce_ad'=>'Keban'
        ] );



        ilceler::create( [
            'id'=>296,
            'il_id'=>23,
            'ilce_ad'=>'Kovancılar'
        ] );



        ilceler::create( [
            'id'=>297,
            'il_id'=>23,
            'ilce_ad'=>'Maden'
        ] );



        ilceler::create( [
            'id'=>298,
            'il_id'=>23,
            'ilce_ad'=>'Palu'
        ] );



        ilceler::create( [
            'id'=>299,
            'il_id'=>23,
            'ilce_ad'=>'Sivrice'
        ] );



        ilceler::create( [
            'id'=>300,
            'il_id'=>24,
            'ilce_ad'=>'Çayırlı'
        ] );



        ilceler::create( [
            'id'=>301,
            'il_id'=>24,
            'ilce_ad'=>'Erzincan'
        ] );



        ilceler::create( [
            'id'=>302,
            'il_id'=>24,
            'ilce_ad'=>'İliç(Ilıç)'
        ] );



        ilceler::create( [
            'id'=>303,
            'il_id'=>24,
            'ilce_ad'=>'Kemah'
        ] );



        ilceler::create( [
            'id'=>304,
            'il_id'=>24,
            'ilce_ad'=>'Kemaliye'
        ] );



        ilceler::create( [
            'id'=>305,
            'il_id'=>24,
            'ilce_ad'=>'Otlukbeli'
        ] );



        ilceler::create( [
            'id'=>306,
            'il_id'=>24,
            'ilce_ad'=>'Refahiye'
        ] );



        ilceler::create( [
            'id'=>307,
            'il_id'=>24,
            'ilce_ad'=>'Tercan'
        ] );



        ilceler::create( [
            'id'=>308,
            'il_id'=>24,
            'ilce_ad'=>'Üzümlü'
        ] );



        ilceler::create( [
            'id'=>309,
            'il_id'=>25,
            'ilce_ad'=>'Aşkale'
        ] );



        ilceler::create( [
            'id'=>310,
            'il_id'=>25,
            'ilce_ad'=>'Aziziye(Ilıca)'
        ] );



        ilceler::create( [
            'id'=>311,
            'il_id'=>25,
            'ilce_ad'=>'Çat'
        ] );



        ilceler::create( [
            'id'=>312,
            'il_id'=>25,
            'ilce_ad'=>'Hınıs'
        ] );



        ilceler::create( [
            'id'=>313,
            'il_id'=>25,
            'ilce_ad'=>'Horasan'
        ] );



        ilceler::create( [
            'id'=>314,
            'il_id'=>25,
            'ilce_ad'=>'İspir'
        ] );



        ilceler::create( [
            'id'=>315,
            'il_id'=>25,
            'ilce_ad'=>'Karaçoban'
        ] );



        ilceler::create( [
            'id'=>316,
            'il_id'=>25,
            'ilce_ad'=>'Karayazı'
        ] );



        ilceler::create( [
            'id'=>317,
            'il_id'=>25,
            'ilce_ad'=>'Köprüköy'
        ] );



        ilceler::create( [
            'id'=>318,
            'il_id'=>25,
            'ilce_ad'=>'Narman'
        ] );



        ilceler::create( [
            'id'=>319,
            'il_id'=>25,
            'ilce_ad'=>'Oltu'
        ] );



        ilceler::create( [
            'id'=>320,
            'il_id'=>25,
            'ilce_ad'=>'Olur'
        ] );



        ilceler::create( [
            'id'=>321,
            'il_id'=>25,
            'ilce_ad'=>'Palandöken'
        ] );



        ilceler::create( [
            'id'=>322,
            'il_id'=>25,
            'ilce_ad'=>'Pasinler'
        ] );



        ilceler::create( [
            'id'=>323,
            'il_id'=>25,
            'ilce_ad'=>'Pazaryolu'
        ] );



        ilceler::create( [
            'id'=>324,
            'il_id'=>25,
            'ilce_ad'=>'Şenkaya'
        ] );



        ilceler::create( [
            'id'=>325,
            'il_id'=>25,
            'ilce_ad'=>'Tekman'
        ] );



        ilceler::create( [
            'id'=>326,
            'il_id'=>25,
            'ilce_ad'=>'Tortum'
        ] );



        ilceler::create( [
            'id'=>327,
            'il_id'=>25,
            'ilce_ad'=>'Uzundere'
        ] );



        ilceler::create( [
            'id'=>328,
            'il_id'=>25,
            'ilce_ad'=>'Yakutiye'
        ] );



        ilceler::create( [
            'id'=>329,
            'il_id'=>26,
            'ilce_ad'=>'Alpu'
        ] );



        ilceler::create( [
            'id'=>330,
            'il_id'=>26,
            'ilce_ad'=>'Beylikova'
        ] );



        ilceler::create( [
            'id'=>331,
            'il_id'=>26,
            'ilce_ad'=>'Çifteler'
        ] );



        ilceler::create( [
            'id'=>332,
            'il_id'=>26,
            'ilce_ad'=>'Günyüzü'
        ] );



        ilceler::create( [
            'id'=>333,
            'il_id'=>26,
            'ilce_ad'=>'Han'
        ] );



        ilceler::create( [
            'id'=>334,
            'il_id'=>26,
            'ilce_ad'=>'İnönü'
        ] );



        ilceler::create( [
            'id'=>335,
            'il_id'=>26,
            'ilce_ad'=>'Mahmudiye'
        ] );



        ilceler::create( [
            'id'=>336,
            'il_id'=>26,
            'ilce_ad'=>'Mihalgazi'
        ] );



        ilceler::create( [
            'id'=>337,
            'il_id'=>26,
            'ilce_ad'=>'Mihalıçcık'
        ] );



        ilceler::create( [
            'id'=>338,
            'il_id'=>26,
            'ilce_ad'=>'ODUNPAZARI'
        ] );



        ilceler::create( [
            'id'=>339,
            'il_id'=>26,
            'ilce_ad'=>'Sarıcakaya'
        ] );



        ilceler::create( [
            'id'=>340,
            'il_id'=>26,
            'ilce_ad'=>'Seyitgazi'
        ] );



        ilceler::create( [
            'id'=>341,
            'il_id'=>26,
            'ilce_ad'=>'Sivrihisar'
        ] );



        ilceler::create( [
            'id'=>342,
            'il_id'=>26,
            'ilce_ad'=>'Tepebaşı'
        ] );



        ilceler::create( [
            'id'=>343,
            'il_id'=>27,
            'ilce_ad'=>'Araban'
        ] );



        ilceler::create( [
            'id'=>344,
            'il_id'=>27,
            'ilce_ad'=>'İslahiye'
        ] );



        ilceler::create( [
            'id'=>345,
            'il_id'=>27,
            'ilce_ad'=>'Karkamış'
        ] );



        ilceler::create( [
            'id'=>346,
            'il_id'=>27,
            'ilce_ad'=>'Nizip'
        ] );



        ilceler::create( [
            'id'=>347,
            'il_id'=>27,
            'ilce_ad'=>'Nurdağı'
        ] );



        ilceler::create( [
            'id'=>348,
            'il_id'=>27,
            'ilce_ad'=>'Oğuzeli'
        ] );



        ilceler::create( [
            'id'=>349,
            'il_id'=>27,
            'ilce_ad'=>'ŞAHİNBEY'
        ] );



        ilceler::create( [
            'id'=>350,
            'il_id'=>27,
            'ilce_ad'=>'ŞEHİTKAMİL'
        ] );



        ilceler::create( [
            'id'=>351,
            'il_id'=>27,
            'ilce_ad'=>'Yavuzeli'
        ] );



        ilceler::create( [
            'id'=>352,
            'il_id'=>28,
            'ilce_ad'=>'Alucra'
        ] );



        ilceler::create( [
            'id'=>353,
            'il_id'=>28,
            'ilce_ad'=>'Bulancak'
        ] );



        ilceler::create( [
            'id'=>354,
            'il_id'=>28,
            'ilce_ad'=>'Çamoluk'
        ] );



        ilceler::create( [
            'id'=>355,
            'il_id'=>28,
            'ilce_ad'=>'Çanakçı'
        ] );



        ilceler::create( [
            'id'=>356,
            'il_id'=>28,
            'ilce_ad'=>'Dereli'
        ] );



        ilceler::create( [
            'id'=>357,
            'il_id'=>28,
            'ilce_ad'=>'Doğankent'
        ] );



        ilceler::create( [
            'id'=>358,
            'il_id'=>28,
            'ilce_ad'=>'Espiye'
        ] );



        ilceler::create( [
            'id'=>359,
            'il_id'=>28,
            'ilce_ad'=>'Eynesil'
        ] );



        ilceler::create( [
            'id'=>360,
            'il_id'=>28,
            'ilce_ad'=>'Giresun'
        ] );



        ilceler::create( [
            'id'=>361,
            'il_id'=>28,
            'ilce_ad'=>'Görele'
        ] );



        ilceler::create( [
            'id'=>362,
            'il_id'=>28,
            'ilce_ad'=>'Güce'
        ] );



        ilceler::create( [
            'id'=>363,
            'il_id'=>28,
            'ilce_ad'=>'Keşap'
        ] );



        ilceler::create( [
            'id'=>364,
            'il_id'=>28,
            'ilce_ad'=>'Piraziz'
        ] );



        ilceler::create( [
            'id'=>365,
            'il_id'=>28,
            'ilce_ad'=>'Şebinkarahisar'
        ] );



        ilceler::create( [
            'id'=>366,
            'il_id'=>28,
            'ilce_ad'=>'Tirebolu'
        ] );



        ilceler::create( [
            'id'=>367,
            'il_id'=>28,
            'ilce_ad'=>'Yağlıdere'
        ] );



        ilceler::create( [
            'id'=>368,
            'il_id'=>29,
            'ilce_ad'=>'Gümüşhane'
        ] );



        ilceler::create( [
            'id'=>369,
            'il_id'=>29,
            'ilce_ad'=>'Kelkit'
        ] );



        ilceler::create( [
            'id'=>370,
            'il_id'=>29,
            'ilce_ad'=>'Köse'
        ] );



        ilceler::create( [
            'id'=>371,
            'il_id'=>29,
            'ilce_ad'=>'Kürtün'
        ] );



        ilceler::create( [
            'id'=>372,
            'il_id'=>29,
            'ilce_ad'=>'Şiran'
        ] );



        ilceler::create( [
            'id'=>373,
            'il_id'=>29,
            'ilce_ad'=>'Torul'
        ] );



        ilceler::create( [
            'id'=>374,
            'il_id'=>30,
            'ilce_ad'=>'Çukurca'
        ] );



        ilceler::create( [
            'id'=>375,
            'il_id'=>30,
            'ilce_ad'=>'Hakkari'
        ] );



        ilceler::create( [
            'id'=>376,
            'il_id'=>30,
            'ilce_ad'=>'Şemdinli'
        ] );



        ilceler::create( [
            'id'=>377,
            'il_id'=>30,
            'ilce_ad'=>'Yüksekova'
        ] );



        ilceler::create( [
            'id'=>378,
            'il_id'=>31,
            'ilce_ad'=>'Altınözü'
        ] );



        ilceler::create( [
            'id'=>379,
            'il_id'=>31,
            'ilce_ad'=>'Antakya'
        ] );



        ilceler::create( [
            'id'=>380,
            'il_id'=>31,
            'ilce_ad'=>'Belen'
        ] );



        ilceler::create( [
            'id'=>381,
            'il_id'=>31,
            'ilce_ad'=>'Dörtyol'
        ] );



        ilceler::create( [
            'id'=>382,
            'il_id'=>31,
            'ilce_ad'=>'Erzin'
        ] );



        ilceler::create( [
            'id'=>383,
            'il_id'=>31,
            'ilce_ad'=>'Hassa'
        ] );



        ilceler::create( [
            'id'=>384,
            'il_id'=>31,
            'ilce_ad'=>'İskenderun'
        ] );



        ilceler::create( [
            'id'=>385,
            'il_id'=>31,
            'ilce_ad'=>'Kırıkhan'
        ] );



        ilceler::create( [
            'id'=>386,
            'il_id'=>31,
            'ilce_ad'=>'Kumlu'
        ] );



        ilceler::create( [
            'id'=>387,
            'il_id'=>31,
            'ilce_ad'=>'Reyhanlı'
        ] );



        ilceler::create( [
            'id'=>388,
            'il_id'=>31,
            'ilce_ad'=>'Samandağ'
        ] );



        ilceler::create( [
            'id'=>389,
            'il_id'=>31,
            'ilce_ad'=>'Yayladağı'
        ] );



        ilceler::create( [
            'id'=>390,
            'il_id'=>32,
            'ilce_ad'=>'Aksu'
        ] );



        ilceler::create( [
            'id'=>391,
            'il_id'=>32,
            'ilce_ad'=>'Atabey'
        ] );



        ilceler::create( [
            'id'=>392,
            'il_id'=>32,
            'ilce_ad'=>'Eğridir(Eğirdir)'
        ] );



        ilceler::create( [
            'id'=>393,
            'il_id'=>32,
            'ilce_ad'=>'Gelendost'
        ] );



        ilceler::create( [
            'id'=>394,
            'il_id'=>32,
            'ilce_ad'=>'Gönen'
        ] );



        ilceler::create( [
            'id'=>395,
            'il_id'=>32,
            'ilce_ad'=>'ISPARTA'
        ] );



        ilceler::create( [
            'id'=>396,
            'il_id'=>32,
            'ilce_ad'=>'Keçiborlu'
        ] );



        ilceler::create( [
            'id'=>397,
            'il_id'=>32,
            'ilce_ad'=>'Senirkent'
        ] );



        ilceler::create( [
            'id'=>398,
            'il_id'=>32,
            'ilce_ad'=>'Sütçüler'
        ] );



        ilceler::create( [
            'id'=>399,
            'il_id'=>32,
            'ilce_ad'=>'Şarkikaraağaç'
        ] );



        ilceler::create( [
            'id'=>400,
            'il_id'=>32,
            'ilce_ad'=>'Uluborlu'
        ] );



        ilceler::create( [
            'id'=>401,
            'il_id'=>32,
            'ilce_ad'=>'Yalvaç'
        ] );



        ilceler::create( [
            'id'=>402,
            'il_id'=>32,
            'ilce_ad'=>'Yenişarbademli'
        ] );



        ilceler::create( [
            'id'=>403,
            'il_id'=>33,
            'ilce_ad'=>'AKDENİZ'
        ] );



        ilceler::create( [
            'id'=>404,
            'il_id'=>33,
            'ilce_ad'=>'Anamur'
        ] );



        ilceler::create( [
            'id'=>405,
            'il_id'=>33,
            'ilce_ad'=>'Aydıncık'
        ] );



        ilceler::create( [
            'id'=>406,
            'il_id'=>33,
            'ilce_ad'=>'Bozyazı'
        ] );



        ilceler::create( [
            'id'=>407,
            'il_id'=>33,
            'ilce_ad'=>'Çamlıyayla'
        ] );



        ilceler::create( [
            'id'=>408,
            'il_id'=>33,
            'ilce_ad'=>'ERDEMLİ'
        ] );



        ilceler::create( [
            'id'=>409,
            'il_id'=>33,
            'ilce_ad'=>'Gülnar (Gülpınar)'
        ] );



        ilceler::create( [
            'id'=>410,
            'il_id'=>33,
            'ilce_ad'=>'Mezitli'
        ] );



        ilceler::create( [
            'id'=>411,
            'il_id'=>33,
            'ilce_ad'=>'Mut'
        ] );



        ilceler::create( [
            'id'=>412,
            'il_id'=>33,
            'ilce_ad'=>'Silifke'
        ] );



        ilceler::create( [
            'id'=>413,
            'il_id'=>33,
            'ilce_ad'=>'Tarsus'
        ] );



        ilceler::create( [
            'id'=>414,
            'il_id'=>33,
            'ilce_ad'=>'TOROSLAR'
        ] );



        ilceler::create( [
            'id'=>415,
            'il_id'=>33,
            'ilce_ad'=>'Yenişehir'
        ] );



        ilceler::create( [
            'id'=>416,
            'il_id'=>34,
            'ilce_ad'=>'Adalar'
        ] );



        ilceler::create( [
            'id'=>417,
            'il_id'=>34,
            'ilce_ad'=>'Arnavutköy'
        ] );



        ilceler::create( [
            'id'=>418,
            'il_id'=>34,
            'ilce_ad'=>'Ataşehir'
        ] );



        ilceler::create( [
            'id'=>419,
            'il_id'=>34,
            'ilce_ad'=>'AVCILAR'
        ] );



        ilceler::create( [
            'id'=>420,
            'il_id'=>34,
            'ilce_ad'=>'BAĞCILAR'
        ] );



        ilceler::create( [
            'id'=>421,
            'il_id'=>34,
            'ilce_ad'=>'BAHÇELİEVLER'
        ] );



        ilceler::create( [
            'id'=>422,
            'il_id'=>34,
            'ilce_ad'=>'Bakırköy'
        ] );



        ilceler::create( [
            'id'=>423,
            'il_id'=>34,
            'ilce_ad'=>'Başakşehir'
        ] );



        ilceler::create( [
            'id'=>424,
            'il_id'=>34,
            'ilce_ad'=>'BAYRAMPAŞA'
        ] );



        ilceler::create( [
            'id'=>425,
            'il_id'=>34,
            'ilce_ad'=>'BEŞİKTAŞ'
        ] );



        ilceler::create( [
            'id'=>426,
            'il_id'=>34,
            'ilce_ad'=>'Beykoz'
        ] );



        ilceler::create( [
            'id'=>427,
            'il_id'=>34,
            'ilce_ad'=>'BEYLİKDÜZÜ'
        ] );



        ilceler::create( [
            'id'=>428,
            'il_id'=>34,
            'ilce_ad'=>'BEYOĞLU'
        ] );



        ilceler::create( [
            'id'=>429,
            'il_id'=>34,
            'ilce_ad'=>'BÜYÜKÇEKMECE'
        ] );



        ilceler::create( [
            'id'=>430,
            'il_id'=>34,
            'ilce_ad'=>'Çatalca'
        ] );



        ilceler::create( [
            'id'=>431,
            'il_id'=>34,
            'ilce_ad'=>'Çekmeköy'
        ] );



        ilceler::create( [
            'id'=>432,
            'il_id'=>34,
            'ilce_ad'=>'ESENLER'
        ] );



        ilceler::create( [
            'id'=>433,
            'il_id'=>34,
            'ilce_ad'=>'ESENYURT'
        ] );



        ilceler::create( [
            'id'=>434,
            'il_id'=>34,
            'ilce_ad'=>'EYÜP'
        ] );



        ilceler::create( [
            'id'=>435,
            'il_id'=>34,
            'ilce_ad'=>'FATİH'
        ] );



        ilceler::create( [
            'id'=>436,
            'il_id'=>34,
            'ilce_ad'=>'GAZİOSMANPAŞA'
        ] );



        ilceler::create( [
            'id'=>437,
            'il_id'=>34,
            'ilce_ad'=>'GÜNGÖREN'
        ] );



        ilceler::create( [
            'id'=>438,
            'il_id'=>34,
            'ilce_ad'=>'KADIKÖY'
        ] );



        ilceler::create( [
            'id'=>439,
            'il_id'=>34,
            'ilce_ad'=>'KAĞITHANE'
        ] );



        ilceler::create( [
            'id'=>440,
            'il_id'=>34,
            'ilce_ad'=>'KARTAL'
        ] );



        ilceler::create( [
            'id'=>441,
            'il_id'=>34,
            'ilce_ad'=>'KÜÇÜKÇEKMECE'
        ] );



        ilceler::create( [
            'id'=>442,
            'il_id'=>34,
            'ilce_ad'=>'MALTEPE'
        ] );



        ilceler::create( [
            'id'=>443,
            'il_id'=>34,
            'ilce_ad'=>'PENDİK'
        ] );



        ilceler::create( [
            'id'=>444,
            'il_id'=>34,
            'ilce_ad'=>'Sancaktepe'
        ] );



        ilceler::create( [
            'id'=>445,
            'il_id'=>34,
            'ilce_ad'=>'SARIYER'
        ] );



        ilceler::create( [
            'id'=>446,
            'il_id'=>34,
            'ilce_ad'=>'Silivri'
        ] );



        ilceler::create( [
            'id'=>447,
            'il_id'=>34,
            'ilce_ad'=>'SULTANBEYLİ'
        ] );



        ilceler::create( [
            'id'=>448,
            'il_id'=>34,
            'ilce_ad'=>'SULTANGAZİ'
        ] );



        ilceler::create( [
            'id'=>449,
            'il_id'=>34,
            'ilce_ad'=>'Şile'
        ] );



        ilceler::create( [
            'id'=>450,
            'il_id'=>34,
            'ilce_ad'=>'ŞİŞLİ'
        ] );



        ilceler::create( [
            'id'=>451,
            'il_id'=>34,
            'ilce_ad'=>'Tuzla'
        ] );



        ilceler::create( [
            'id'=>452,
            'il_id'=>34,
            'ilce_ad'=>'ÜMRANİYE'
        ] );



        ilceler::create( [
            'id'=>453,
            'il_id'=>34,
            'ilce_ad'=>'Üsküdar'
        ] );



        ilceler::create( [
            'id'=>454,
            'il_id'=>34,
            'ilce_ad'=>'Zeytinburnu'
        ] );



        ilceler::create( [
            'id'=>455,
            'il_id'=>35,
            'ilce_ad'=>'ALİAĞA'
        ] );



        ilceler::create( [
            'id'=>456,
            'il_id'=>35,
            'ilce_ad'=>'Balçova'
        ] );



        ilceler::create( [
            'id'=>457,
            'il_id'=>35,
            'ilce_ad'=>'Bayındır'
        ] );



        ilceler::create( [
            'id'=>458,
            'il_id'=>35,
            'ilce_ad'=>'BAYRAKLI'
        ] );



        ilceler::create( [
            'id'=>459,
            'il_id'=>35,
            'ilce_ad'=>'Bergama'
        ] );



        ilceler::create( [
            'id'=>460,
            'il_id'=>35,
            'ilce_ad'=>'Beydağ'
        ] );



        ilceler::create( [
            'id'=>461,
            'il_id'=>35,
            'ilce_ad'=>'BORNOVA'
        ] );



        ilceler::create( [
            'id'=>462,
            'il_id'=>35,
            'ilce_ad'=>'BUCA'
        ] );



        ilceler::create( [
            'id'=>463,
            'il_id'=>35,
            'ilce_ad'=>'Cumaovası(Menderes)'
        ] );



        ilceler::create( [
            'id'=>464,
            'il_id'=>35,
            'ilce_ad'=>'Çeşme'
        ] );



        ilceler::create( [
            'id'=>465,
            'il_id'=>35,
            'ilce_ad'=>'Çiğli'
        ] );



        ilceler::create( [
            'id'=>466,
            'il_id'=>35,
            'ilce_ad'=>'Dikili'
        ] );



        ilceler::create( [
            'id'=>467,
            'il_id'=>35,
            'ilce_ad'=>'Foça'
        ] );



        ilceler::create( [
            'id'=>468,
            'il_id'=>35,
            'ilce_ad'=>'Gaziemir'
        ] );



        ilceler::create( [
            'id'=>469,
            'il_id'=>35,
            'ilce_ad'=>'Güzelbahçe'
        ] );



        ilceler::create( [
            'id'=>470,
            'il_id'=>35,
            'ilce_ad'=>'Karabağlar'
        ] );



        ilceler::create( [
            'id'=>471,
            'il_id'=>35,
            'ilce_ad'=>'Karaburun'
        ] );



        ilceler::create( [
            'id'=>472,
            'il_id'=>35,
            'ilce_ad'=>'KARŞIYAKA'
        ] );



        ilceler::create( [
            'id'=>473,
            'il_id'=>35,
            'ilce_ad'=>'Kemalpaşa'
        ] );



        ilceler::create( [
            'id'=>474,
            'il_id'=>35,
            'ilce_ad'=>'Kınık'
        ] );



        ilceler::create( [
            'id'=>475,
            'il_id'=>35,
            'ilce_ad'=>'Kiraz'
        ] );



        ilceler::create( [
            'id'=>476,
            'il_id'=>35,
            'ilce_ad'=>'KONAK'
        ] );



        ilceler::create( [
            'id'=>477,
            'il_id'=>35,
            'ilce_ad'=>'Menemen'
        ] );



        ilceler::create( [
            'id'=>478,
            'il_id'=>35,
            'ilce_ad'=>'Narlıdere'
        ] );



        ilceler::create( [
            'id'=>479,
            'il_id'=>35,
            'ilce_ad'=>'Ödemiş'
        ] );



        ilceler::create( [
            'id'=>480,
            'il_id'=>35,
            'ilce_ad'=>'Seferihisar'
        ] );



        ilceler::create( [
            'id'=>481,
            'il_id'=>35,
            'ilce_ad'=>'Selçuk'
        ] );



        ilceler::create( [
            'id'=>482,
            'il_id'=>35,
            'ilce_ad'=>'Tire'
        ] );



        ilceler::create( [
            'id'=>483,
            'il_id'=>35,
            'ilce_ad'=>'Torbalı'
        ] );



        ilceler::create( [
            'id'=>484,
            'il_id'=>35,
            'ilce_ad'=>'Urla'
        ] );



        ilceler::create( [
            'id'=>485,
            'il_id'=>36,
            'ilce_ad'=>'Akyaka'
        ] );



        ilceler::create( [
            'id'=>486,
            'il_id'=>36,
            'ilce_ad'=>'Arpaçay'
        ] );



        ilceler::create( [
            'id'=>487,
            'il_id'=>36,
            'ilce_ad'=>'Digor'
        ] );



        ilceler::create( [
            'id'=>488,
            'il_id'=>36,
            'ilce_ad'=>'Kağızman'
        ] );



        ilceler::create( [
            'id'=>489,
            'il_id'=>36,
            'ilce_ad'=>'Kars'
        ] );



        ilceler::create( [
            'id'=>490,
            'il_id'=>36,
            'ilce_ad'=>'Sarıkamış'
        ] );



        ilceler::create( [
            'id'=>491,
            'il_id'=>36,
            'ilce_ad'=>'Selim'
        ] );



        ilceler::create( [
            'id'=>492,
            'il_id'=>36,
            'ilce_ad'=>'Susuz'
        ] );



        ilceler::create( [
            'id'=>493,
            'il_id'=>37,
            'ilce_ad'=>'Abana'
        ] );



        ilceler::create( [
            'id'=>494,
            'il_id'=>37,
            'ilce_ad'=>'Ağlı'
        ] );



        ilceler::create( [
            'id'=>495,
            'il_id'=>37,
            'ilce_ad'=>'Araç'
        ] );



        ilceler::create( [
            'id'=>496,
            'il_id'=>37,
            'ilce_ad'=>'Azdavay'
        ] );



        ilceler::create( [
            'id'=>497,
            'il_id'=>37,
            'ilce_ad'=>'Bozkurt'
        ] );



        ilceler::create( [
            'id'=>498,
            'il_id'=>37,
            'ilce_ad'=>'Cide'
        ] );



        ilceler::create( [
            'id'=>499,
            'il_id'=>37,
            'ilce_ad'=>'Çatalzeytin'
        ] );



        ilceler::create( [
            'id'=>500,
            'il_id'=>37,
            'ilce_ad'=>'Daday'
        ] );



        ilceler::create( [
            'id'=>501,
            'il_id'=>37,
            'ilce_ad'=>'Devrekani'
        ] );



        ilceler::create( [
            'id'=>502,
            'il_id'=>37,
            'ilce_ad'=>'Doğanyurt'
        ] );



        ilceler::create( [
            'id'=>503,
            'il_id'=>37,
            'ilce_ad'=>'Hanönü(Gökçeağaç)'
        ] );



        ilceler::create( [
            'id'=>504,
            'il_id'=>37,
            'ilce_ad'=>'İhsangazi'
        ] );



        ilceler::create( [
            'id'=>505,
            'il_id'=>37,
            'ilce_ad'=>'İnebolu'
        ] );



        ilceler::create( [
            'id'=>506,
            'il_id'=>37,
            'ilce_ad'=>'Kastamonu'
        ] );



        ilceler::create( [
            'id'=>507,
            'il_id'=>37,
            'ilce_ad'=>'Küre'
        ] );



        ilceler::create( [
            'id'=>508,
            'il_id'=>37,
            'ilce_ad'=>'Pınarbaşı'
        ] );



        ilceler::create( [
            'id'=>509,
            'il_id'=>37,
            'ilce_ad'=>'Seydiler'
        ] );



        ilceler::create( [
            'id'=>510,
            'il_id'=>37,
            'ilce_ad'=>'Şenpazar'
        ] );



        ilceler::create( [
            'id'=>511,
            'il_id'=>37,
            'ilce_ad'=>'Taşköprü'
        ] );



        ilceler::create( [
            'id'=>512,
            'il_id'=>37,
            'ilce_ad'=>'Tosya'
        ] );



        ilceler::create( [
            'id'=>513,
            'il_id'=>38,
            'ilce_ad'=>'Akkışla'
        ] );



        ilceler::create( [
            'id'=>514,
            'il_id'=>38,
            'ilce_ad'=>'Bünyan'
        ] );



        ilceler::create( [
            'id'=>515,
            'il_id'=>38,
            'ilce_ad'=>'Develi'
        ] );



        ilceler::create( [
            'id'=>516,
            'il_id'=>38,
            'ilce_ad'=>'Felahiye'
        ] );



        ilceler::create( [
            'id'=>517,
            'il_id'=>38,
            'ilce_ad'=>'Hacılar'
        ] );



        ilceler::create( [
            'id'=>518,
            'il_id'=>38,
            'ilce_ad'=>'İncesu'
        ] );



        ilceler::create( [
            'id'=>519,
            'il_id'=>38,
            'ilce_ad'=>'Kocasinan'
        ] );



        ilceler::create( [
            'id'=>520,
            'il_id'=>38,
            'ilce_ad'=>'MELİKGAZİ'
        ] );



        ilceler::create( [
            'id'=>521,
            'il_id'=>38,
            'ilce_ad'=>'Özvatan(Çukur)'
        ] );



        ilceler::create( [
            'id'=>522,
            'il_id'=>38,
            'ilce_ad'=>'Pınarbaşı'
        ] );



        ilceler::create( [
            'id'=>523,
            'il_id'=>38,
            'ilce_ad'=>'Sarıoğlan'
        ] );



        ilceler::create( [
            'id'=>524,
            'il_id'=>38,
            'ilce_ad'=>'Sarız'
        ] );



        ilceler::create( [
            'id'=>525,
            'il_id'=>38,
            'ilce_ad'=>'Talas'
        ] );



        ilceler::create( [
            'id'=>526,
            'il_id'=>38,
            'ilce_ad'=>'Tomarza'
        ] );



        ilceler::create( [
            'id'=>527,
            'il_id'=>38,
            'ilce_ad'=>'Yahyalı'
        ] );



        ilceler::create( [
            'id'=>528,
            'il_id'=>38,
            'ilce_ad'=>'Yeşilhisar'
        ] );



        ilceler::create( [
            'id'=>529,
            'il_id'=>39,
            'ilce_ad'=>'Babaeski'
        ] );



        ilceler::create( [
            'id'=>530,
            'il_id'=>39,
            'ilce_ad'=>'Demirköy'
        ] );



        ilceler::create( [
            'id'=>531,
            'il_id'=>39,
            'ilce_ad'=>'Kırklareli'
        ] );



        ilceler::create( [
            'id'=>532,
            'il_id'=>39,
            'ilce_ad'=>'Kofçaz'
        ] );



        ilceler::create( [
            'id'=>533,
            'il_id'=>39,
            'ilce_ad'=>'Lüleburgaz'
        ] );



        ilceler::create( [
            'id'=>534,
            'il_id'=>39,
            'ilce_ad'=>'Pehlivanköy'
        ] );



        ilceler::create( [
            'id'=>535,
            'il_id'=>39,
            'ilce_ad'=>'Pınarhisar'
        ] );



        ilceler::create( [
            'id'=>536,
            'il_id'=>39,
            'ilce_ad'=>'Vize'
        ] );



        ilceler::create( [
            'id'=>537,
            'il_id'=>40,
            'ilce_ad'=>'Akçakent'
        ] );



        ilceler::create( [
            'id'=>538,
            'il_id'=>40,
            'ilce_ad'=>'Akpınar'
        ] );



        ilceler::create( [
            'id'=>539,
            'il_id'=>40,
            'ilce_ad'=>'Boztepe'
        ] );



        ilceler::create( [
            'id'=>540,
            'il_id'=>40,
            'ilce_ad'=>'Çiçekdağı'
        ] );



        ilceler::create( [
            'id'=>541,
            'il_id'=>40,
            'ilce_ad'=>'Kaman'
        ] );



        ilceler::create( [
            'id'=>542,
            'il_id'=>40,
            'ilce_ad'=>'KIRŞEHİR'
        ] );



        ilceler::create( [
            'id'=>543,
            'il_id'=>40,
            'ilce_ad'=>'Mucur'
        ] );



        ilceler::create( [
            'id'=>544,
            'il_id'=>41,
            'ilce_ad'=>'Başiskele'
        ] );



        ilceler::create( [
            'id'=>545,
            'il_id'=>41,
            'ilce_ad'=>'Çayırova'
        ] );



        ilceler::create( [
            'id'=>546,
            'il_id'=>41,
            'ilce_ad'=>'Darıca'
        ] );



        ilceler::create( [
            'id'=>547,
            'il_id'=>41,
            'ilce_ad'=>'Derince'
        ] );



        ilceler::create( [
            'id'=>548,
            'il_id'=>41,
            'ilce_ad'=>'Dilovası'
        ] );



        ilceler::create( [
            'id'=>549,
            'il_id'=>41,
            'ilce_ad'=>'Gebze'
        ] );



        ilceler::create( [
            'id'=>550,
            'il_id'=>41,
            'ilce_ad'=>'Gölcük'
        ] );



        ilceler::create( [
            'id'=>551,
            'il_id'=>41,
            'ilce_ad'=>'İzmit'
        ] );



        ilceler::create( [
            'id'=>552,
            'il_id'=>41,
            'ilce_ad'=>'Kandıra'
        ] );



        ilceler::create( [
            'id'=>553,
            'il_id'=>41,
            'ilce_ad'=>'Karamürsel'
        ] );



        ilceler::create( [
            'id'=>554,
            'il_id'=>41,
            'ilce_ad'=>'Kartepe'
        ] );



        ilceler::create( [
            'id'=>555,
            'il_id'=>41,
            'ilce_ad'=>'Tütünçiftlik'
        ] );



        ilceler::create( [
            'id'=>556,
            'il_id'=>42,
            'ilce_ad'=>'Ahırlı'
        ] );



        ilceler::create( [
            'id'=>557,
            'il_id'=>42,
            'ilce_ad'=>'Akören'
        ] );



        ilceler::create( [
            'id'=>558,
            'il_id'=>42,
            'ilce_ad'=>'Akşehir'
        ] );



        ilceler::create( [
            'id'=>559,
            'il_id'=>42,
            'ilce_ad'=>'Altınekin'
        ] );



        ilceler::create( [
            'id'=>560,
            'il_id'=>42,
            'ilce_ad'=>'Beyşehir'
        ] );



        ilceler::create( [
            'id'=>561,
            'il_id'=>42,
            'ilce_ad'=>'Bozkır'
        ] );



        ilceler::create( [
            'id'=>562,
            'il_id'=>42,
            'ilce_ad'=>'Cihanbeyli'
        ] );



        ilceler::create( [
            'id'=>563,
            'il_id'=>42,
            'ilce_ad'=>'Çeltik'
        ] );



        ilceler::create( [
            'id'=>564,
            'il_id'=>42,
            'ilce_ad'=>'Çumra'
        ] );



        ilceler::create( [
            'id'=>565,
            'il_id'=>42,
            'ilce_ad'=>'Derbent'
        ] );



        ilceler::create( [
            'id'=>566,
            'il_id'=>42,
            'ilce_ad'=>'Derebucak'
        ] );



        ilceler::create( [
            'id'=>567,
            'il_id'=>42,
            'ilce_ad'=>'Doğanhisar'
        ] );



        ilceler::create( [
            'id'=>568,
            'il_id'=>42,
            'ilce_ad'=>'Emirgazi'
        ] );



        ilceler::create( [
            'id'=>569,
            'il_id'=>42,
            'ilce_ad'=>'EREĞLİ'
        ] );



        ilceler::create( [
            'id'=>570,
            'il_id'=>42,
            'ilce_ad'=>'Güneysınır'
        ] );



        ilceler::create( [
            'id'=>571,
            'il_id'=>42,
            'ilce_ad'=>'Hadim'
        ] );



        ilceler::create( [
            'id'=>572,
            'il_id'=>42,
            'ilce_ad'=>'Halkapınar'
        ] );



        ilceler::create( [
            'id'=>573,
            'il_id'=>42,
            'ilce_ad'=>'Hüyük'
        ] );



        ilceler::create( [
            'id'=>574,
            'il_id'=>42,
            'ilce_ad'=>'Ilgın'
        ] );



        ilceler::create( [
            'id'=>575,
            'il_id'=>42,
            'ilce_ad'=>'Kadınhanı'
        ] );



        ilceler::create( [
            'id'=>576,
            'il_id'=>42,
            'ilce_ad'=>'Karapınar'
        ] );



        ilceler::create( [
            'id'=>577,
            'il_id'=>42,
            'ilce_ad'=>'KARATAY'
        ] );



        ilceler::create( [
            'id'=>578,
            'il_id'=>42,
            'ilce_ad'=>'Kulu'
        ] );



        ilceler::create( [
            'id'=>579,
            'il_id'=>42,
            'ilce_ad'=>'Meram'
        ] );



        ilceler::create( [
            'id'=>580,
            'il_id'=>42,
            'ilce_ad'=>'Sarayönü'
        ] );



        ilceler::create( [
            'id'=>581,
            'il_id'=>42,
            'ilce_ad'=>'SELÇUKLU'
        ] );



        ilceler::create( [
            'id'=>582,
            'il_id'=>42,
            'ilce_ad'=>'Seydişehir'
        ] );



        ilceler::create( [
            'id'=>583,
            'il_id'=>42,
            'ilce_ad'=>'Taşkent'
        ] );



        ilceler::create( [
            'id'=>584,
            'il_id'=>42,
            'ilce_ad'=>'Tuzlukçu'
        ] );



        ilceler::create( [
            'id'=>585,
            'il_id'=>42,
            'ilce_ad'=>'Yalıhüyük'
        ] );



        ilceler::create( [
            'id'=>586,
            'il_id'=>42,
            'ilce_ad'=>'Yunak'
        ] );



        ilceler::create( [
            'id'=>587,
            'il_id'=>43,
            'ilce_ad'=>'Altıntaş'
        ] );



        ilceler::create( [
            'id'=>588,
            'il_id'=>43,
            'ilce_ad'=>'Aslanapa'
        ] );



        ilceler::create( [
            'id'=>589,
            'il_id'=>43,
            'ilce_ad'=>'Çavdarhisar'
        ] );



        ilceler::create( [
            'id'=>590,
            'il_id'=>43,
            'ilce_ad'=>'Domaniç'
        ] );



        ilceler::create( [
            'id'=>591,
            'il_id'=>43,
            'ilce_ad'=>'Dumlupınar'
        ] );



        ilceler::create( [
            'id'=>592,
            'il_id'=>43,
            'ilce_ad'=>'Emet'
        ] );



        ilceler::create( [
            'id'=>593,
            'il_id'=>43,
            'ilce_ad'=>'Gediz'
        ] );



        ilceler::create( [
            'id'=>594,
            'il_id'=>43,
            'ilce_ad'=>'Hisarcık'
        ] );



        ilceler::create( [
            'id'=>595,
            'il_id'=>43,
            'ilce_ad'=>'KÜTAHYA'
        ] );



        ilceler::create( [
            'id'=>596,
            'il_id'=>43,
            'ilce_ad'=>'Pazarlar'
        ] );



        ilceler::create( [
            'id'=>597,
            'il_id'=>43,
            'ilce_ad'=>'Simav'
        ] );



        ilceler::create( [
            'id'=>598,
            'il_id'=>43,
            'ilce_ad'=>'Şaphane'
        ] );



        ilceler::create( [
            'id'=>599,
            'il_id'=>43,
            'ilce_ad'=>'Tavşanlı'
        ] );



        ilceler::create( [
            'id'=>600,
            'il_id'=>43,
            'ilce_ad'=>'Tunçbilek'
        ] );



        ilceler::create( [
            'id'=>601,
            'il_id'=>44,
            'ilce_ad'=>'Akçadağ'
        ] );



        ilceler::create( [
            'id'=>602,
            'il_id'=>44,
            'ilce_ad'=>'Arapkir'
        ] );



        ilceler::create( [
            'id'=>603,
            'il_id'=>44,
            'ilce_ad'=>'Arguvan'
        ] );



        ilceler::create( [
            'id'=>604,
            'il_id'=>44,
            'ilce_ad'=>'Battalgazi'
        ] );



        ilceler::create( [
            'id'=>605,
            'il_id'=>44,
            'ilce_ad'=>'Darende'
        ] );



        ilceler::create( [
            'id'=>606,
            'il_id'=>44,
            'ilce_ad'=>'Doğanşehir'
        ] );



        ilceler::create( [
            'id'=>607,
            'il_id'=>44,
            'ilce_ad'=>'Doğanyol'
        ] );



        ilceler::create( [
            'id'=>608,
            'il_id'=>44,
            'ilce_ad'=>'Hekimhan'
        ] );



        ilceler::create( [
            'id'=>609,
            'il_id'=>44,
            'ilce_ad'=>'Kale'
        ] );



        ilceler::create( [
            'id'=>610,
            'il_id'=>44,
            'ilce_ad'=>'Kuluncak'
        ] );



        ilceler::create( [
            'id'=>611,
            'il_id'=>44,
            'ilce_ad'=>'Malatya'
        ] );



        ilceler::create( [
            'id'=>612,
            'il_id'=>44,
            'ilce_ad'=>'Pötürge'
        ] );



        ilceler::create( [
            'id'=>613,
            'il_id'=>44,
            'ilce_ad'=>'Yazıhan'
        ] );



        ilceler::create( [
            'id'=>614,
            'il_id'=>44,
            'ilce_ad'=>'YEŞİLYURT'
        ] );



        ilceler::create( [
            'id'=>615,
            'il_id'=>45,
            'ilce_ad'=>'Ahmetli'
        ] );



        ilceler::create( [
            'id'=>616,
            'il_id'=>45,
            'ilce_ad'=>'Akhisar'
        ] );



        ilceler::create( [
            'id'=>617,
            'il_id'=>45,
            'ilce_ad'=>'Alaşehir'
        ] );



        ilceler::create( [
            'id'=>618,
            'il_id'=>45,
            'ilce_ad'=>'Demirci'
        ] );



        ilceler::create( [
            'id'=>619,
            'il_id'=>45,
            'ilce_ad'=>'Gölmarmara'
        ] );



        ilceler::create( [
            'id'=>620,
            'il_id'=>45,
            'ilce_ad'=>'Gördes'
        ] );



        ilceler::create( [
            'id'=>621,
            'il_id'=>45,
            'ilce_ad'=>'Kırkağaç'
        ] );



        ilceler::create( [
            'id'=>622,
            'il_id'=>45,
            'ilce_ad'=>'Köprübaşı'
        ] );



        ilceler::create( [
            'id'=>623,
            'il_id'=>45,
            'ilce_ad'=>'Kula'
        ] );



        ilceler::create( [
            'id'=>624,
            'il_id'=>45,
            'ilce_ad'=>'Manisa'
        ] );



        ilceler::create( [
            'id'=>625,
            'il_id'=>45,
            'ilce_ad'=>'Salihli'
        ] );



        ilceler::create( [
            'id'=>626,
            'il_id'=>45,
            'ilce_ad'=>'Sarıgöl'
        ] );



        ilceler::create( [
            'id'=>627,
            'il_id'=>45,
            'ilce_ad'=>'Saruhanlı'
        ] );



        ilceler::create( [
            'id'=>628,
            'il_id'=>45,
            'ilce_ad'=>'Selendi'
        ] );



        ilceler::create( [
            'id'=>629,
            'il_id'=>45,
            'ilce_ad'=>'Soma'
        ] );



        ilceler::create( [
            'id'=>630,
            'il_id'=>45,
            'ilce_ad'=>'Turgutlu'
        ] );



        ilceler::create( [
            'id'=>631,
            'il_id'=>46,
            'ilce_ad'=>'Afşin'
        ] );



        ilceler::create( [
            'id'=>632,
            'il_id'=>46,
            'ilce_ad'=>'Andırın'
        ] );



        ilceler::create( [
            'id'=>633,
            'il_id'=>46,
            'ilce_ad'=>'Çağlayancerit'
        ] );



        ilceler::create( [
            'id'=>634,
            'il_id'=>46,
            'ilce_ad'=>'Ekinözü'
        ] );



        ilceler::create( [
            'id'=>635,
            'il_id'=>46,
            'ilce_ad'=>'Elbistan'
        ] );



        ilceler::create( [
            'id'=>636,
            'il_id'=>46,
            'ilce_ad'=>'Göksun'
        ] );



        ilceler::create( [
            'id'=>637,
            'il_id'=>46,
            'ilce_ad'=>'Kahramanmaraş'
        ] );



        ilceler::create( [
            'id'=>638,
            'il_id'=>46,
            'ilce_ad'=>'Nurhak'
        ] );



        ilceler::create( [
            'id'=>639,
            'il_id'=>46,
            'ilce_ad'=>'Pazarcık'
        ] );



        ilceler::create( [
            'id'=>640,
            'il_id'=>46,
            'ilce_ad'=>'Türkoğlu'
        ] );



        ilceler::create( [
            'id'=>641,
            'il_id'=>47,
            'ilce_ad'=>'Dargeçit'
        ] );



        ilceler::create( [
            'id'=>642,
            'il_id'=>47,
            'ilce_ad'=>'Derik'
        ] );



        ilceler::create( [
            'id'=>643,
            'il_id'=>47,
            'ilce_ad'=>'Kızıltepe'
        ] );



        ilceler::create( [
            'id'=>644,
            'il_id'=>47,
            'ilce_ad'=>'Mardin'
        ] );



        ilceler::create( [
            'id'=>645,
            'il_id'=>47,
            'ilce_ad'=>'Mazıdağı'
        ] );



        ilceler::create( [
            'id'=>646,
            'il_id'=>47,
            'ilce_ad'=>'Midyat(Estel)'
        ] );



        ilceler::create( [
            'id'=>647,
            'il_id'=>47,
            'ilce_ad'=>'Nusaybin'
        ] );



        ilceler::create( [
            'id'=>648,
            'il_id'=>47,
            'ilce_ad'=>'Ömerli'
        ] );



        ilceler::create( [
            'id'=>649,
            'il_id'=>47,
            'ilce_ad'=>'Savur'
        ] );



        ilceler::create( [
            'id'=>650,
            'il_id'=>47,
            'ilce_ad'=>'Yeşilli'
        ] );



        ilceler::create( [
            'id'=>651,
            'il_id'=>48,
            'ilce_ad'=>'Bodrum'
        ] );



        ilceler::create( [
            'id'=>652,
            'il_id'=>48,
            'ilce_ad'=>'Dalaman'
        ] );



        ilceler::create( [
            'id'=>653,
            'il_id'=>48,
            'ilce_ad'=>'Datça'
        ] );



        ilceler::create( [
            'id'=>654,
            'il_id'=>48,
            'ilce_ad'=>'Fethiye'
        ] );



        ilceler::create( [
            'id'=>655,
            'il_id'=>48,
            'ilce_ad'=>'Kavaklıdere'
        ] );



        ilceler::create( [
            'id'=>656,
            'il_id'=>48,
            'ilce_ad'=>'Köyceğiz'
        ] );



        ilceler::create( [
            'id'=>657,
            'il_id'=>48,
            'ilce_ad'=>'Marmaris'
        ] );



        ilceler::create( [
            'id'=>658,
            'il_id'=>48,
            'ilce_ad'=>'Milas'
        ] );



        ilceler::create( [
            'id'=>659,
            'il_id'=>48,
            'ilce_ad'=>'Muğla'
        ] );



        ilceler::create( [
            'id'=>660,
            'il_id'=>48,
            'ilce_ad'=>'Ortaca'
        ] );



        ilceler::create( [
            'id'=>661,
            'il_id'=>48,
            'ilce_ad'=>'Ula'
        ] );



        ilceler::create( [
            'id'=>662,
            'il_id'=>48,
            'ilce_ad'=>'Yatağan'
        ] );



        ilceler::create( [
            'id'=>663,
            'il_id'=>49,
            'ilce_ad'=>'Bulanık'
        ] );



        ilceler::create( [
            'id'=>664,
            'il_id'=>49,
            'ilce_ad'=>'Hasköy'
        ] );



        ilceler::create( [
            'id'=>665,
            'il_id'=>49,
            'ilce_ad'=>'Korkut'
        ] );



        ilceler::create( [
            'id'=>666,
            'il_id'=>49,
            'ilce_ad'=>'Malazgirt'
        ] );



        ilceler::create( [
            'id'=>667,
            'il_id'=>49,
            'ilce_ad'=>'Muş'
        ] );



        ilceler::create( [
            'id'=>668,
            'il_id'=>49,
            'ilce_ad'=>'Varto'
        ] );



        ilceler::create( [
            'id'=>669,
            'il_id'=>50,
            'ilce_ad'=>'Acıgöl'
        ] );



        ilceler::create( [
            'id'=>670,
            'il_id'=>50,
            'ilce_ad'=>'Avanos'
        ] );



        ilceler::create( [
            'id'=>671,
            'il_id'=>50,
            'ilce_ad'=>'Derinkuyu'
        ] );



        ilceler::create( [
            'id'=>672,
            'il_id'=>50,
            'ilce_ad'=>'Gülşehir'
        ] );



        ilceler::create( [
            'id'=>673,
            'il_id'=>50,
            'ilce_ad'=>'Hacıbektaş'
        ] );



        ilceler::create( [
            'id'=>674,
            'il_id'=>50,
            'ilce_ad'=>'Kozaklı'
        ] );



        ilceler::create( [
            'id'=>675,
            'il_id'=>50,
            'ilce_ad'=>'Nevşehir'
        ] );



        ilceler::create( [
            'id'=>676,
            'il_id'=>50,
            'ilce_ad'=>'Ürgüp'
        ] );



        ilceler::create( [
            'id'=>677,
            'il_id'=>51,
            'ilce_ad'=>'Altunhisar'
        ] );



        ilceler::create( [
            'id'=>678,
            'il_id'=>51,
            'ilce_ad'=>'Bor'
        ] );



        ilceler::create( [
            'id'=>679,
            'il_id'=>51,
            'ilce_ad'=>'Çamardı'
        ] );



        ilceler::create( [
            'id'=>680,
            'il_id'=>51,
            'ilce_ad'=>'Çiftlik(Özyurt)'
        ] );



        ilceler::create( [
            'id'=>681,
            'il_id'=>51,
            'ilce_ad'=>'Niğde'
        ] );



        ilceler::create( [
            'id'=>682,
            'il_id'=>51,
            'ilce_ad'=>'Ulukışla'
        ] );



        ilceler::create( [
            'id'=>683,
            'il_id'=>52,
            'ilce_ad'=>'Akkuş'
        ] );



        ilceler::create( [
            'id'=>684,
            'il_id'=>52,
            'ilce_ad'=>'Aybastı'
        ] );



        ilceler::create( [
            'id'=>685,
            'il_id'=>52,
            'ilce_ad'=>'Çamaş'
        ] );



        ilceler::create( [
            'id'=>686,
            'il_id'=>52,
            'ilce_ad'=>'Çatalpınar'
        ] );



        ilceler::create( [
            'id'=>687,
            'il_id'=>52,
            'ilce_ad'=>'Çaybaşı'
        ] );



        ilceler::create( [
            'id'=>688,
            'il_id'=>52,
            'ilce_ad'=>'Fatsa'
        ] );



        ilceler::create( [
            'id'=>689,
            'il_id'=>52,
            'ilce_ad'=>'Gölköy'
        ] );



        ilceler::create( [
            'id'=>690,
            'il_id'=>52,
            'ilce_ad'=>'Gülyalı'
        ] );



        ilceler::create( [
            'id'=>691,
            'il_id'=>52,
            'ilce_ad'=>'Gürgentepe'
        ] );



        ilceler::create( [
            'id'=>692,
            'il_id'=>52,
            'ilce_ad'=>'İkizce'
        ] );



        ilceler::create( [
            'id'=>693,
            'il_id'=>52,
            'ilce_ad'=>'Kabataş'
        ] );



        ilceler::create( [
            'id'=>694,
            'il_id'=>52,
            'ilce_ad'=>'Karadüz(Kabadüz)'
        ] );



        ilceler::create( [
            'id'=>695,
            'il_id'=>52,
            'ilce_ad'=>'Korgan'
        ] );



        ilceler::create( [
            'id'=>696,
            'il_id'=>52,
            'ilce_ad'=>'Kumru'
        ] );



        ilceler::create( [
            'id'=>697,
            'il_id'=>52,
            'ilce_ad'=>'Mesudiye'
        ] );



        ilceler::create( [
            'id'=>698,
            'il_id'=>52,
            'ilce_ad'=>'Ordu'
        ] );



        ilceler::create( [
            'id'=>699,
            'il_id'=>52,
            'ilce_ad'=>'Perşembe'
        ] );



        ilceler::create( [
            'id'=>700,
            'il_id'=>52,
            'ilce_ad'=>'Ulubey'
        ] );



        ilceler::create( [
            'id'=>701,
            'il_id'=>52,
            'ilce_ad'=>'ÜNYE'
        ] );



        ilceler::create( [
            'id'=>702,
            'il_id'=>53,
            'ilce_ad'=>'ARDEŞEN'
        ] );



        ilceler::create( [
            'id'=>703,
            'il_id'=>53,
            'ilce_ad'=>'Çamlıhemşin'
        ] );



        ilceler::create( [
            'id'=>704,
            'il_id'=>53,
            'ilce_ad'=>'Çayeli'
        ] );



        ilceler::create( [
            'id'=>705,
            'il_id'=>53,
            'ilce_ad'=>'Derepazarı'
        ] );



        ilceler::create( [
            'id'=>706,
            'il_id'=>53,
            'ilce_ad'=>'Fındıklı'
        ] );



        ilceler::create( [
            'id'=>707,
            'il_id'=>53,
            'ilce_ad'=>'Güneysu'
        ] );



        ilceler::create( [
            'id'=>708,
            'il_id'=>53,
            'ilce_ad'=>'Hemşin'
        ] );



        ilceler::create( [
            'id'=>709,
            'il_id'=>53,
            'ilce_ad'=>'İkizdere'
        ] );



        ilceler::create( [
            'id'=>710,
            'il_id'=>53,
            'ilce_ad'=>'İyidere'
        ] );



        ilceler::create( [
            'id'=>711,
            'il_id'=>53,
            'ilce_ad'=>'Kalkandere'
        ] );



        ilceler::create( [
            'id'=>712,
            'il_id'=>53,
            'ilce_ad'=>'Pazar'
        ] );



        ilceler::create( [
            'id'=>713,
            'il_id'=>53,
            'ilce_ad'=>'Rize'
        ] );



        ilceler::create( [
            'id'=>714,
            'il_id'=>54,
            'ilce_ad'=>'ADAPAZARI'
        ] );



        ilceler::create( [
            'id'=>715,
            'il_id'=>54,
            'ilce_ad'=>'Akyazı'
        ] );



        ilceler::create( [
            'id'=>716,
            'il_id'=>54,
            'ilce_ad'=>'Arifiye'
        ] );



        ilceler::create( [
            'id'=>717,
            'il_id'=>54,
            'ilce_ad'=>'Erenler'
        ] );



        ilceler::create( [
            'id'=>718,
            'il_id'=>54,
            'ilce_ad'=>'Ferizli'
        ] );



        ilceler::create( [
            'id'=>719,
            'il_id'=>54,
            'ilce_ad'=>'Geyve'
        ] );



        ilceler::create( [
            'id'=>720,
            'il_id'=>54,
            'ilce_ad'=>'Hendek'
        ] );



        ilceler::create( [
            'id'=>721,
            'il_id'=>54,
            'ilce_ad'=>'Karapürçek'
        ] );



        ilceler::create( [
            'id'=>722,
            'il_id'=>54,
            'ilce_ad'=>'Karasu'
        ] );



        ilceler::create( [
            'id'=>723,
            'il_id'=>54,
            'ilce_ad'=>'Kaynarca'
        ] );



        ilceler::create( [
            'id'=>724,
            'il_id'=>54,
            'ilce_ad'=>'Kocaali'
        ] );



        ilceler::create( [
            'id'=>725,
            'il_id'=>54,
            'ilce_ad'=>'Pamukova'
        ] );



        ilceler::create( [
            'id'=>726,
            'il_id'=>54,
            'ilce_ad'=>'Sapanca'
        ] );



        ilceler::create( [
            'id'=>727,
            'il_id'=>54,
            'ilce_ad'=>'Serdivan'
        ] );



        ilceler::create( [
            'id'=>728,
            'il_id'=>54,
            'ilce_ad'=>'Söğütlü'
        ] );



        ilceler::create( [
            'id'=>729,
            'il_id'=>54,
            'ilce_ad'=>'Taraklı'
        ] );



        ilceler::create( [
            'id'=>730,
            'il_id'=>55,
            'ilce_ad'=>'19 Mayıs(Ballıca)'
        ] );



        ilceler::create( [
            'id'=>731,
            'il_id'=>55,
            'ilce_ad'=>'Alaçam'
        ] );



        ilceler::create( [
            'id'=>732,
            'il_id'=>55,
            'ilce_ad'=>'Asarcık'
        ] );



        ilceler::create( [
            'id'=>733,
            'il_id'=>55,
            'ilce_ad'=>'ATAKUM'
        ] );



        ilceler::create( [
            'id'=>734,
            'il_id'=>55,
            'ilce_ad'=>'Ayvacık'
        ] );



        ilceler::create( [
            'id'=>735,
            'il_id'=>55,
            'ilce_ad'=>'Bafra'
        ] );



        ilceler::create( [
            'id'=>736,
            'il_id'=>55,
            'ilce_ad'=>'Canik'
        ] );



        ilceler::create( [
            'id'=>737,
            'il_id'=>55,
            'ilce_ad'=>'Çarşamba'
        ] );



        ilceler::create( [
            'id'=>738,
            'il_id'=>55,
            'ilce_ad'=>'Havza'
        ] );



        ilceler::create( [
            'id'=>739,
            'il_id'=>55,
            'ilce_ad'=>'İlkadım'
        ] );



        ilceler::create( [
            'id'=>740,
            'il_id'=>55,
            'ilce_ad'=>'Kavak'
        ] );



        ilceler::create( [
            'id'=>741,
            'il_id'=>55,
            'ilce_ad'=>'Ladik'
        ] );



        ilceler::create( [
            'id'=>742,
            'il_id'=>55,
            'ilce_ad'=>'Salıpazarı'
        ] );



        ilceler::create( [
            'id'=>743,
            'il_id'=>55,
            'ilce_ad'=>'Tekkeköy'
        ] );



        ilceler::create( [
            'id'=>744,
            'il_id'=>55,
            'ilce_ad'=>'Terme'
        ] );



        ilceler::create( [
            'id'=>745,
            'il_id'=>55,
            'ilce_ad'=>'Vezirköprü'
        ] );



        ilceler::create( [
            'id'=>746,
            'il_id'=>55,
            'ilce_ad'=>'Yakakent'
        ] );



        ilceler::create( [
            'id'=>747,
            'il_id'=>56,
            'ilce_ad'=>'Aydınlar'
        ] );



        ilceler::create( [
            'id'=>748,
            'il_id'=>56,
            'ilce_ad'=>'Baykan'
        ] );



        ilceler::create( [
            'id'=>749,
            'il_id'=>56,
            'ilce_ad'=>'Eruh'
        ] );



        ilceler::create( [
            'id'=>750,
            'il_id'=>56,
            'ilce_ad'=>'Kurtalan'
        ] );



        ilceler::create( [
            'id'=>751,
            'il_id'=>56,
            'ilce_ad'=>'Pervari'
        ] );



        ilceler::create( [
            'id'=>752,
            'il_id'=>56,
            'ilce_ad'=>'Siirt'
        ] );



        ilceler::create( [
            'id'=>753,
            'il_id'=>56,
            'ilce_ad'=>'Şirvan'
        ] );



        ilceler::create( [
            'id'=>754,
            'il_id'=>57,
            'ilce_ad'=>'Ayancık'
        ] );



        ilceler::create( [
            'id'=>755,
            'il_id'=>57,
            'ilce_ad'=>'Boyabat'
        ] );



        ilceler::create( [
            'id'=>756,
            'il_id'=>57,
            'ilce_ad'=>'Dikmen'
        ] );



        ilceler::create( [
            'id'=>757,
            'il_id'=>57,
            'ilce_ad'=>'Durağan'
        ] );



        ilceler::create( [
            'id'=>758,
            'il_id'=>57,
            'ilce_ad'=>'Erfelek'
        ] );



        ilceler::create( [
            'id'=>759,
            'il_id'=>57,
            'ilce_ad'=>'Gerze'
        ] );



        ilceler::create( [
            'id'=>760,
            'il_id'=>57,
            'ilce_ad'=>'Saraydüzü'
        ] );



        ilceler::create( [
            'id'=>761,
            'il_id'=>57,
            'ilce_ad'=>'SİNOP'
        ] );



        ilceler::create( [
            'id'=>762,
            'il_id'=>57,
            'ilce_ad'=>'Türkeli'
        ] );



        ilceler::create( [
            'id'=>763,
            'il_id'=>58,
            'ilce_ad'=>'Akıncılar'
        ] );



        ilceler::create( [
            'id'=>764,
            'il_id'=>58,
            'ilce_ad'=>'Altınyayla'
        ] );



        ilceler::create( [
            'id'=>765,
            'il_id'=>58,
            'ilce_ad'=>'Divriği'
        ] );



        ilceler::create( [
            'id'=>766,
            'il_id'=>58,
            'ilce_ad'=>'Doğanşar'
        ] );



        ilceler::create( [
            'id'=>767,
            'il_id'=>58,
            'ilce_ad'=>'Gemerek'
        ] );



        ilceler::create( [
            'id'=>768,
            'il_id'=>58,
            'ilce_ad'=>'Gölova'
        ] );



        ilceler::create( [
            'id'=>769,
            'il_id'=>58,
            'ilce_ad'=>'Gürün'
        ] );



        ilceler::create( [
            'id'=>770,
            'il_id'=>58,
            'ilce_ad'=>'Hafik'
        ] );



        ilceler::create( [
            'id'=>771,
            'il_id'=>58,
            'ilce_ad'=>'İmranlı'
        ] );



        ilceler::create( [
            'id'=>772,
            'il_id'=>58,
            'ilce_ad'=>'Kangal'
        ] );



        ilceler::create( [
            'id'=>773,
            'il_id'=>58,
            'ilce_ad'=>'Koyulhisar'
        ] );



        ilceler::create( [
            'id'=>774,
            'il_id'=>58,
            'ilce_ad'=>'Sivas'
        ] );



        ilceler::create( [
            'id'=>775,
            'il_id'=>58,
            'ilce_ad'=>'Suşehri'
        ] );



        ilceler::create( [
            'id'=>776,
            'il_id'=>58,
            'ilce_ad'=>'Şarkışla'
        ] );



        ilceler::create( [
            'id'=>777,
            'il_id'=>58,
            'ilce_ad'=>'Ulaş'
        ] );



        ilceler::create( [
            'id'=>778,
            'il_id'=>58,
            'ilce_ad'=>'Yıldızeli'
        ] );



        ilceler::create( [
            'id'=>779,
            'il_id'=>58,
            'ilce_ad'=>'Zara'
        ] );



        ilceler::create( [
            'id'=>780,
            'il_id'=>59,
            'ilce_ad'=>'Çerkezköy'
        ] );



        ilceler::create( [
            'id'=>781,
            'il_id'=>59,
            'ilce_ad'=>'Çorlu'
        ] );



        ilceler::create( [
            'id'=>782,
            'il_id'=>59,
            'ilce_ad'=>'Hayrabolu'
        ] );



        ilceler::create( [
            'id'=>783,
            'il_id'=>59,
            'ilce_ad'=>'Malkara'
        ] );



        ilceler::create( [
            'id'=>784,
            'il_id'=>59,
            'ilce_ad'=>'Marmaraereğlisi'
        ] );



        ilceler::create( [
            'id'=>785,
            'il_id'=>59,
            'ilce_ad'=>'Muratlı'
        ] );



        ilceler::create( [
            'id'=>786,
            'il_id'=>59,
            'ilce_ad'=>'Saray'
        ] );



        ilceler::create( [
            'id'=>787,
            'il_id'=>59,
            'ilce_ad'=>'Şarköy'
        ] );



        ilceler::create( [
            'id'=>788,
            'il_id'=>59,
            'ilce_ad'=>'Tekirdağ'
        ] );



        ilceler::create( [
            'id'=>789,
            'il_id'=>60,
            'ilce_ad'=>'Almus'
        ] );



        ilceler::create( [
            'id'=>790,
            'il_id'=>60,
            'ilce_ad'=>'Artova'
        ] );



        ilceler::create( [
            'id'=>791,
            'il_id'=>60,
            'ilce_ad'=>'Başçiftlik'
        ] );



        ilceler::create( [
            'id'=>792,
            'il_id'=>60,
            'ilce_ad'=>'ERBAA'
        ] );



        ilceler::create( [
            'id'=>793,
            'il_id'=>60,
            'ilce_ad'=>'Niksar'
        ] );



        ilceler::create( [
            'id'=>794,
            'il_id'=>60,
            'ilce_ad'=>'Pazar'
        ] );



        ilceler::create( [
            'id'=>795,
            'il_id'=>60,
            'ilce_ad'=>'Reşadiye'
        ] );



        ilceler::create( [
            'id'=>796,
            'il_id'=>60,
            'ilce_ad'=>'Sulusaray'
        ] );



        ilceler::create( [
            'id'=>797,
            'il_id'=>60,
            'ilce_ad'=>'Tokat'
        ] );



        ilceler::create( [
            'id'=>798,
            'il_id'=>60,
            'ilce_ad'=>'Turhal'
        ] );



        ilceler::create( [
            'id'=>799,
            'il_id'=>60,
            'ilce_ad'=>'Yeşilyurt'
        ] );



        ilceler::create( [
            'id'=>800,
            'il_id'=>60,
            'ilce_ad'=>'Zile'
        ] );



        ilceler::create( [
            'id'=>801,
            'il_id'=>61,
            'ilce_ad'=>'Akçaabat'
        ] );



        ilceler::create( [
            'id'=>802,
            'il_id'=>61,
            'ilce_ad'=>'Araklı'
        ] );



        ilceler::create( [
            'id'=>803,
            'il_id'=>61,
            'ilce_ad'=>'Arsin'
        ] );



        ilceler::create( [
            'id'=>804,
            'il_id'=>61,
            'ilce_ad'=>'Beşikdüzü'
        ] );



        ilceler::create( [
            'id'=>805,
            'il_id'=>61,
            'ilce_ad'=>'Çarşıbaşı'
        ] );



        ilceler::create( [
            'id'=>806,
            'il_id'=>61,
            'ilce_ad'=>'Çaykara'
        ] );



        ilceler::create( [
            'id'=>807,
            'il_id'=>61,
            'ilce_ad'=>'Dernekpazarı'
        ] );



        ilceler::create( [
            'id'=>808,
            'il_id'=>61,
            'ilce_ad'=>'Düzköy'
        ] );



        ilceler::create( [
            'id'=>809,
            'il_id'=>61,
            'ilce_ad'=>'Hayrat'
        ] );



        ilceler::create( [
            'id'=>810,
            'il_id'=>61,
            'ilce_ad'=>'Köprübaşı'
        ] );



        ilceler::create( [
            'id'=>811,
            'il_id'=>61,
            'ilce_ad'=>'Maçka'
        ] );



        ilceler::create( [
            'id'=>812,
            'il_id'=>61,
            'ilce_ad'=>'Of'
        ] );



        ilceler::create( [
            'id'=>813,
            'il_id'=>61,
            'ilce_ad'=>'Sürmene'
        ] );



        ilceler::create( [
            'id'=>814,
            'il_id'=>61,
            'ilce_ad'=>'Şalpazarı'
        ] );



        ilceler::create( [
            'id'=>815,
            'il_id'=>61,
            'ilce_ad'=>'Tonya'
        ] );



        ilceler::create( [
            'id'=>816,
            'il_id'=>61,
            'ilce_ad'=>'Trabzon'
        ] );



        ilceler::create( [
            'id'=>817,
            'il_id'=>61,
            'ilce_ad'=>'Vakfıkebir'
        ] );



        ilceler::create( [
            'id'=>818,
            'il_id'=>61,
            'ilce_ad'=>'Yomra'
        ] );



        ilceler::create( [
            'id'=>819,
            'il_id'=>62,
            'ilce_ad'=>'Çemişgezek'
        ] );



        ilceler::create( [
            'id'=>820,
            'il_id'=>62,
            'ilce_ad'=>'Hozat'
        ] );



        ilceler::create( [
            'id'=>821,
            'il_id'=>62,
            'ilce_ad'=>'Mazgirt'
        ] );



        ilceler::create( [
            'id'=>822,
            'il_id'=>62,
            'ilce_ad'=>'Nazımiye'
        ] );



        ilceler::create( [
            'id'=>823,
            'il_id'=>62,
            'ilce_ad'=>'Ovacık'
        ] );



        ilceler::create( [
            'id'=>824,
            'il_id'=>62,
            'ilce_ad'=>'Pertek'
        ] );



        ilceler::create( [
            'id'=>825,
            'il_id'=>62,
            'ilce_ad'=>'Pülümür'
        ] );



        ilceler::create( [
            'id'=>826,
            'il_id'=>62,
            'ilce_ad'=>'Tunceli'
        ] );



        ilceler::create( [
            'id'=>827,
            'il_id'=>63,
            'ilce_ad'=>'Akçakale'
        ] );



        ilceler::create( [
            'id'=>828,
            'il_id'=>63,
            'ilce_ad'=>'Birecik'
        ] );



        ilceler::create( [
            'id'=>829,
            'il_id'=>63,
            'ilce_ad'=>'Bozova'
        ] );



        ilceler::create( [
            'id'=>830,
            'il_id'=>63,
            'ilce_ad'=>'Ceylanpınar'
        ] );



        ilceler::create( [
            'id'=>831,
            'il_id'=>63,
            'ilce_ad'=>'Halfeti'
        ] );



        ilceler::create( [
            'id'=>832,
            'il_id'=>63,
            'ilce_ad'=>'Harran'
        ] );



        ilceler::create( [
            'id'=>833,
            'il_id'=>63,
            'ilce_ad'=>'Hilvan'
        ] );



        ilceler::create( [
            'id'=>834,
            'il_id'=>63,
            'ilce_ad'=>'SİVEREK'
        ] );



        ilceler::create( [
            'id'=>835,
            'il_id'=>63,
            'ilce_ad'=>'Suruç'
        ] );



        ilceler::create( [
            'id'=>836,
            'il_id'=>63,
            'ilce_ad'=>'Şanlıurfa'
        ] );



        ilceler::create( [
            'id'=>837,
            'il_id'=>63,
            'ilce_ad'=>'Viranşehir'
        ] );



        ilceler::create( [
            'id'=>838,
            'il_id'=>64,
            'ilce_ad'=>'Banaz'
        ] );



        ilceler::create( [
            'id'=>839,
            'il_id'=>64,
            'ilce_ad'=>'Eşme'
        ] );



        ilceler::create( [
            'id'=>840,
            'il_id'=>64,
            'ilce_ad'=>'Karahallı'
        ] );



        ilceler::create( [
            'id'=>841,
            'il_id'=>64,
            'ilce_ad'=>'Sivaslı'
        ] );



        ilceler::create( [
            'id'=>842,
            'il_id'=>64,
            'ilce_ad'=>'Ulubey'
        ] );



        ilceler::create( [
            'id'=>843,
            'il_id'=>64,
            'ilce_ad'=>'Uşak'
        ] );



        ilceler::create( [
            'id'=>844,
            'il_id'=>65,
            'ilce_ad'=>'Bahçesaray'
        ] );



        ilceler::create( [
            'id'=>845,
            'il_id'=>65,
            'ilce_ad'=>'Başkale'
        ] );



        ilceler::create( [
            'id'=>846,
            'il_id'=>65,
            'ilce_ad'=>'Çaldıran'
        ] );



        ilceler::create( [
            'id'=>847,
            'il_id'=>65,
            'ilce_ad'=>'Çatak'
        ] );



        ilceler::create( [
            'id'=>848,
            'il_id'=>65,
            'ilce_ad'=>'Edremit(Gümüşdere)'
        ] );



        ilceler::create( [
            'id'=>849,
            'il_id'=>65,
            'ilce_ad'=>'Erciş'
        ] );



        ilceler::create( [
            'id'=>850,
            'il_id'=>65,
            'ilce_ad'=>'Gevaş'
        ] );



        ilceler::create( [
            'id'=>851,
            'il_id'=>65,
            'ilce_ad'=>'Gürpınar'
        ] );



        ilceler::create( [
            'id'=>852,
            'il_id'=>65,
            'ilce_ad'=>'Muradiye'
        ] );



        ilceler::create( [
            'id'=>853,
            'il_id'=>65,
            'ilce_ad'=>'Özalp'
        ] );



        ilceler::create( [
            'id'=>854,
            'il_id'=>65,
            'ilce_ad'=>'Saray'
        ] );



        ilceler::create( [
            'id'=>855,
            'il_id'=>65,
            'ilce_ad'=>'Van'
        ] );



        ilceler::create( [
            'id'=>856,
            'il_id'=>66,
            'ilce_ad'=>'Akdağmadeni'
        ] );



        ilceler::create( [
            'id'=>857,
            'il_id'=>66,
            'ilce_ad'=>'Aydıncık'
        ] );



        ilceler::create( [
            'id'=>858,
            'il_id'=>66,
            'ilce_ad'=>'Boğazlıyan'
        ] );



        ilceler::create( [
            'id'=>859,
            'il_id'=>66,
            'ilce_ad'=>'Çandır'
        ] );



        ilceler::create( [
            'id'=>860,
            'il_id'=>66,
            'ilce_ad'=>'Çayıralan'
        ] );



        ilceler::create( [
            'id'=>861,
            'il_id'=>66,
            'ilce_ad'=>'Çekerek'
        ] );



        ilceler::create( [
            'id'=>862,
            'il_id'=>66,
            'ilce_ad'=>'Kadışehri'
        ] );



        ilceler::create( [
            'id'=>863,
            'il_id'=>66,
            'ilce_ad'=>'Saraykent'
        ] );



        ilceler::create( [
            'id'=>864,
            'il_id'=>66,
            'ilce_ad'=>'Sarıkaya'
        ] );



        ilceler::create( [
            'id'=>865,
            'il_id'=>66,
            'ilce_ad'=>'Sorgun'
        ] );



        ilceler::create( [
            'id'=>866,
            'il_id'=>66,
            'ilce_ad'=>'Şefaatli'
        ] );



        ilceler::create( [
            'id'=>867,
            'il_id'=>66,
            'ilce_ad'=>'Yenifakılı'
        ] );



        ilceler::create( [
            'id'=>868,
            'il_id'=>66,
            'ilce_ad'=>'Yerköy'
        ] );



        ilceler::create( [
            'id'=>869,
            'il_id'=>66,
            'ilce_ad'=>'Yozgat'
        ] );



        ilceler::create( [
            'id'=>870,
            'il_id'=>67,
            'ilce_ad'=>'ALAPLI'
        ] );



        ilceler::create( [
            'id'=>871,
            'il_id'=>67,
            'ilce_ad'=>'Çaycuma'
        ] );



        ilceler::create( [
            'id'=>872,
            'il_id'=>67,
            'ilce_ad'=>'Devrek'
        ] );



        ilceler::create( [
            'id'=>873,
            'il_id'=>67,
            'ilce_ad'=>'Gökçebey'
        ] );



        ilceler::create( [
            'id'=>874,
            'il_id'=>67,
            'ilce_ad'=>'KARADENİZEREĞLİ'
        ] );



        ilceler::create( [
            'id'=>875,
            'il_id'=>67,
            'ilce_ad'=>'Zonguldak'
        ] );



        ilceler::create( [
            'id'=>876,
            'il_id'=>68,
            'ilce_ad'=>'Ağaçören'
        ] );



        ilceler::create( [
            'id'=>877,
            'il_id'=>68,
            'ilce_ad'=>'Aksaray'
        ] );



        ilceler::create( [
            'id'=>878,
            'il_id'=>68,
            'ilce_ad'=>'Eskil'
        ] );



        ilceler::create( [
            'id'=>879,
            'il_id'=>68,
            'ilce_ad'=>'Gülağaç(Ağaçlı)'
        ] );



        ilceler::create( [
            'id'=>880,
            'il_id'=>68,
            'ilce_ad'=>'Güzelyurt'
        ] );



        ilceler::create( [
            'id'=>881,
            'il_id'=>68,
            'ilce_ad'=>'Ortaköy'
        ] );



        ilceler::create( [
            'id'=>882,
            'il_id'=>68,
            'ilce_ad'=>'Sarıyahşi'
        ] );



        ilceler::create( [
            'id'=>883,
            'il_id'=>69,
            'ilce_ad'=>'Aydıntepe'
        ] );



        ilceler::create( [
            'id'=>884,
            'il_id'=>69,
            'ilce_ad'=>'Bayburt'
        ] );



        ilceler::create( [
            'id'=>885,
            'il_id'=>69,
            'ilce_ad'=>'Demirözü'
        ] );



        ilceler::create( [
            'id'=>886,
            'il_id'=>70,
            'ilce_ad'=>'Ayrancı'
        ] );



        ilceler::create( [
            'id'=>887,
            'il_id'=>70,
            'ilce_ad'=>'Başyayla'
        ] );



        ilceler::create( [
            'id'=>888,
            'il_id'=>70,
            'ilce_ad'=>'Ermenek'
        ] );



        ilceler::create( [
            'id'=>889,
            'il_id'=>70,
            'ilce_ad'=>'Karaman'
        ] );



        ilceler::create( [
            'id'=>890,
            'il_id'=>70,
            'ilce_ad'=>'Kazımkarabekir'
        ] );



        ilceler::create( [
            'id'=>891,
            'il_id'=>70,
            'ilce_ad'=>'Sarıveliler'
        ] );



        ilceler::create( [
            'id'=>892,
            'il_id'=>71,
            'ilce_ad'=>'Bahşili'
        ] );



        ilceler::create( [
            'id'=>893,
            'il_id'=>71,
            'ilce_ad'=>'Balışeyh'
        ] );



        ilceler::create( [
            'id'=>894,
            'il_id'=>71,
            'ilce_ad'=>'Çelebi'
        ] );



        ilceler::create( [
            'id'=>895,
            'il_id'=>71,
            'ilce_ad'=>'Delice'
        ] );



        ilceler::create( [
            'id'=>896,
            'il_id'=>71,
            'ilce_ad'=>'Karakeçili'
        ] );



        ilceler::create( [
            'id'=>897,
            'il_id'=>71,
            'ilce_ad'=>'Keskin'
        ] );



        ilceler::create( [
            'id'=>898,
            'il_id'=>71,
            'ilce_ad'=>'Kırıkkale'
        ] );



        ilceler::create( [
            'id'=>899,
            'il_id'=>71,
            'ilce_ad'=>'Sulakyurt'
        ] );



        ilceler::create( [
            'id'=>900,
            'il_id'=>71,
            'ilce_ad'=>'Yahşihan'
        ] );



        ilceler::create( [
            'id'=>901,
            'il_id'=>72,
            'ilce_ad'=>'Batman'
        ] );



        ilceler::create( [
            'id'=>902,
            'il_id'=>72,
            'ilce_ad'=>'Beşiri'
        ] );



        ilceler::create( [
            'id'=>903,
            'il_id'=>72,
            'ilce_ad'=>'Gercüş'
        ] );



        ilceler::create( [
            'id'=>904,
            'il_id'=>72,
            'ilce_ad'=>'Hasankeyf'
        ] );



        ilceler::create( [
            'id'=>905,
            'il_id'=>72,
            'ilce_ad'=>'Kozluk'
        ] );



        ilceler::create( [
            'id'=>906,
            'il_id'=>72,
            'ilce_ad'=>'Sason'
        ] );



        ilceler::create( [
            'id'=>907,
            'il_id'=>73,
            'ilce_ad'=>'Beytüşşebap'
        ] );



        ilceler::create( [
            'id'=>908,
            'il_id'=>73,
            'ilce_ad'=>'Cizre'
        ] );



        ilceler::create( [
            'id'=>909,
            'il_id'=>73,
            'ilce_ad'=>'Güçlükonak'
        ] );



        ilceler::create( [
            'id'=>910,
            'il_id'=>73,
            'ilce_ad'=>'İdil'
        ] );



        ilceler::create( [
            'id'=>911,
            'il_id'=>73,
            'ilce_ad'=>'Silopi'
        ] );



        ilceler::create( [
            'id'=>912,
            'il_id'=>73,
            'ilce_ad'=>'Şırnak'
        ] );



        ilceler::create( [
            'id'=>913,
            'il_id'=>73,
            'ilce_ad'=>'Uludere'
        ] );



        ilceler::create( [
            'id'=>914,
            'il_id'=>74,
            'ilce_ad'=>'Amasra'
        ] );



        ilceler::create( [
            'id'=>915,
            'il_id'=>74,
            'ilce_ad'=>'Bartın'
        ] );



        ilceler::create( [
            'id'=>916,
            'il_id'=>74,
            'ilce_ad'=>'Kurucaşile'
        ] );



        ilceler::create( [
            'id'=>917,
            'il_id'=>74,
            'ilce_ad'=>'Ulus'
        ] );



        ilceler::create( [
            'id'=>918,
            'il_id'=>75,
            'ilce_ad'=>'Ardahan'
        ] );



        ilceler::create( [
            'id'=>919,
            'il_id'=>75,
            'ilce_ad'=>'Çıldır'
        ] );



        ilceler::create( [
            'id'=>920,
            'il_id'=>75,
            'ilce_ad'=>'Damal'
        ] );



        ilceler::create( [
            'id'=>921,
            'il_id'=>75,
            'ilce_ad'=>'Göle'
        ] );



        ilceler::create( [
            'id'=>922,
            'il_id'=>75,
            'ilce_ad'=>'Hanak'
        ] );



        ilceler::create( [
            'id'=>923,
            'il_id'=>75,
            'ilce_ad'=>'Posof'
        ] );



        ilceler::create( [
            'id'=>924,
            'il_id'=>76,
            'ilce_ad'=>'Aralık'
        ] );



        ilceler::create( [
            'id'=>925,
            'il_id'=>76,
            'ilce_ad'=>'Iğdır'
        ] );



        ilceler::create( [
            'id'=>926,
            'il_id'=>76,
            'ilce_ad'=>'Karakoyunlu'
        ] );



        ilceler::create( [
            'id'=>927,
            'il_id'=>76,
            'ilce_ad'=>'Tuzluca'
        ] );



        ilceler::create( [
            'id'=>928,
            'il_id'=>77,
            'ilce_ad'=>'Altınova'
        ] );



        ilceler::create( [
            'id'=>929,
            'il_id'=>77,
            'ilce_ad'=>'Armutlu'
        ] );



        ilceler::create( [
            'id'=>930,
            'il_id'=>77,
            'ilce_ad'=>'Çınarcık'
        ] );



        ilceler::create( [
            'id'=>931,
            'il_id'=>77,
            'ilce_ad'=>'Çiftlikköy'
        ] );



        ilceler::create( [
            'id'=>932,
            'il_id'=>77,
            'ilce_ad'=>'Termal'
        ] );



        ilceler::create( [
            'id'=>933,
            'il_id'=>77,
            'ilce_ad'=>'Yalova'
        ] );



        ilceler::create( [
            'id'=>934,
            'il_id'=>78,
            'ilce_ad'=>'Eflani'
        ] );



        ilceler::create( [
            'id'=>935,
            'il_id'=>78,
            'ilce_ad'=>'Eskipazar'
        ] );



        ilceler::create( [
            'id'=>936,
            'il_id'=>78,
            'ilce_ad'=>'Karabük'
        ] );



        ilceler::create( [
            'id'=>937,
            'il_id'=>78,
            'ilce_ad'=>'Ovacık'
        ] );



        ilceler::create( [
            'id'=>938,
            'il_id'=>78,
            'ilce_ad'=>'Safranbolu'
        ] );



        ilceler::create( [
            'id'=>939,
            'il_id'=>78,
            'ilce_ad'=>'Yenice'
        ] );



        ilceler::create( [
            'id'=>940,
            'il_id'=>79,
            'ilce_ad'=>'Elbeyli'
        ] );



        ilceler::create( [
            'id'=>941,
            'il_id'=>79,
            'ilce_ad'=>'Kilis'
        ] );



        ilceler::create( [
            'id'=>942,
            'il_id'=>79,
            'ilce_ad'=>'Musabeyli'
        ] );



        ilceler::create( [
            'id'=>943,
            'il_id'=>79,
            'ilce_ad'=>'Polateli'
        ] );



        ilceler::create( [
            'id'=>944,
            'il_id'=>80,
            'ilce_ad'=>'Bahçe'
        ] );



        ilceler::create( [
            'id'=>945,
            'il_id'=>80,
            'ilce_ad'=>'Düziçi'
        ] );



        ilceler::create( [
            'id'=>946,
            'il_id'=>80,
            'ilce_ad'=>'Hasanbeyli'
        ] );



        ilceler::create( [
            'id'=>947,
            'il_id'=>80,
            'ilce_ad'=>'Kadirli'
        ] );



        ilceler::create( [
            'id'=>948,
            'il_id'=>80,
            'ilce_ad'=>'Osmaniye'
        ] );



        ilceler::create( [
            'id'=>949,
            'il_id'=>80,
            'ilce_ad'=>'Sumbas'
        ] );



        ilceler::create( [
            'id'=>950,
            'il_id'=>80,
            'ilce_ad'=>'Toprakkale'
        ] );



        ilceler::create( [
            'id'=>951,
            'il_id'=>81,
            'ilce_ad'=>'AKÇAKOCA'
        ] );



        ilceler::create( [
            'id'=>952,
            'il_id'=>81,
            'ilce_ad'=>'Cumayeri'
        ] );



        ilceler::create( [
            'id'=>953,
            'il_id'=>81,
            'ilce_ad'=>'Çilimli'
        ] );



        ilceler::create( [
            'id'=>954,
            'il_id'=>81,
            'ilce_ad'=>'DÜZCE'
        ] );



        ilceler::create( [
            'id'=>955,
            'il_id'=>81,
            'ilce_ad'=>'Gölyaka'
        ] );



        ilceler::create( [
            'id'=>956,
            'il_id'=>81,
            'ilce_ad'=>'Gümüşova'
        ] );



        ilceler::create( [
            'id'=>957,
            'il_id'=>81,
            'ilce_ad'=>'Kaynaşlı'
        ] );



        ilceler::create( [
            'id'=>958,
            'il_id'=>81,
            'ilce_ad'=>'Yığılca'
        ] );



        ilceler::create( [
            'id'=>959,
            'il_id'=>34,
            'ilce_ad'=>'Beşiktaş'
        ] );



        ilceler::create( [
            'id'=>960,
            'il_id'=>10,
            'ilce_ad'=>'KARESİ'
        ] );



        ilceler::create( [
            'id'=>961,
            'il_id'=>10,
            'ilce_ad'=>'6 EYLÜL'
        ] );



        ilceler::create( [
            'id'=>962,
            'il_id'=>61,
            'ilce_ad'=>'ORTAHİSAR'
        ] );

    }
}
