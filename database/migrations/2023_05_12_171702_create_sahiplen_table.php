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
        Schema::create('sahiplen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('hayvan_image');
            $table->string('hayvan_ad');
            $table->integer('tur');
            $table->integer('yas');
            $table->string('cins');
            $table->boolean('cinsiyet');
            $table->boolean('kisir');
            $table->boolean('kuduz')->nullable();
            $table->boolean('karma')->nullable();
            $table->boolean('parazit')->nullable();
            $table->boolean('kalp_kurtlari')->nullable();
            $table->string('cip_no');
            $table->unsignedBigInteger('il_id');
            $table->string('ilce');
            $table->longText('adres');
            $table->text('baslik');
            $table->longText('aciklama');
            $table->string('ilce');
            $table->longText('adres');
            $table->text('baslik');
            $table->longText('aciklama');
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
        Schema::dropIfExists('sahiplen');
    }
};
