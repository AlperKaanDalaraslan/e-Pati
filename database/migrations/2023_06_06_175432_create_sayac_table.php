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
        Schema::create('sayac', function (Blueprint $table) {
            $table->id();
            $table->integer('randevu');
            $table->integer('sahiplen');
            $table->integer('kayip');
            $table->integer('es_bul');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sayac');
    }
};
