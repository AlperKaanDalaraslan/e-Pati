<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {Schema::create('veteriner', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('vet_id');
        $table->string('klinik_ad');
        $table->unsignedBigInteger('il_id');
        $table->string('ilce');
        $table->string('adres');
        $table->boolean('onay');
        $table->timestamps();

        $table->foreign('vet_id')->references('id')->on('users');
        $table->foreign('il_id')->references('id')->on('iller');
    });
    }


    public function down(): void{Schema::dropIfExists('veteriner');}
};
