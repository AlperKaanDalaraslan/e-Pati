<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {Schema::create('vet_uzmanlik', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('vet_id');
        $table->boolean('cerrahi')->nullable();
        $table->boolean('teshis')->nullable();
        $table->boolean('kuafor')->nullable();
        $table->boolean('dahiliye')->nullable();
        $table->boolean('lab')->nullable();
        $table->boolean('muayene')->nullable();
        $table->boolean('koruyucu_hekim')->nullable();
        $table->boolean('rontgen')->nullable();
        $table->boolean('yogun_bakim')->nullable();

        $table->foreign('vet_id')->references('id')->on('users');

        $table->timestamps();
    });
    }


    public function down(): void{Schema::dropIfExists('vet_uzmanlik');}
};
