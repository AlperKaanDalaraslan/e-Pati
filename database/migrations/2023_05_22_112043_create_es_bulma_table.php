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
        Schema::create('es_bulma', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('user_id');
            $table->string('hayvan_image');
            $table->string('hayvan_ad');
            $table->integer('tur');
            $table->string('cins');
            $table->boolean('cinsiyet');
            $table->integer('yas');
            $table->boolean('kisirlik_durumu');
            $table->unsignedBigInteger('il_id');
            $table->string('ilce');
            $table->longText('adres');
            $table->longText('baslik');
            $table->longText('aciklama');
            $table->date('created_date');
            $table->timestamp('updated_date')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('il_id')->references('id')->on('iller');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('es_bulma');
    }
};
