<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {Schema::create('vet_calisma', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('vet_id');
        $table->string('randevu_bas');
        $table->string('randevu_bit');
        $table->string('randevu_aralik');

        $table->foreign('vet_id')->references('id')->on('users');
        $table->timestamps();
    });
    }


    public function down(): void{Schema::dropIfExists('vet_calisma');}
};
