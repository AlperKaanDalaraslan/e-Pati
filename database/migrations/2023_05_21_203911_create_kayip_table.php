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
        Schema::create('kayip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('hayvan_image');
            $table->integer('tur');
            $table->boolean('cinsiyet');
            $table->boolean('kayip')->nullable();
            $table->boolean('bulunan')->nullable();
            $table->string('cip_no');
            $table->unsignedBigInteger('il_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('il_id')->references('id')->on('iller');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kayip');
    }
};
