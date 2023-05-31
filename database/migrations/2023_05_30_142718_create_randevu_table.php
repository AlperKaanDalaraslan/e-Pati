<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('randevu', function (Blueprint $table) {
            $table->id('randevu_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vet_id');
            $table->string('randevu_saat');
            $table->date('randevu_tarih');
            $table->boolean('onay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('randevu');
    }
};
