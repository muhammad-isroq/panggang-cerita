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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('alamat');
            $table->string('lokasi');
            $table->string('no_hp');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('opening_hours_weekday');
            $table->string('opening_hours_weekend');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('tiktok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
