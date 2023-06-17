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
        Schema::create('rapor', function (Blueprint $table) {
            $table->id();
            $table->integer('ilan_tur');
            $table->integer('ilan_id');
            $table->longText('rapor_nedeni');
            $table->integer('raporlayan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapor');
    }
};
