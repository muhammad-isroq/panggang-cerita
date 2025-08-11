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
        Schema::table('Settings', function (Blueprint $table) {
            $table->text('alamat')->nullable()->change();
            $table->string('lokasi')->nullable()->change();
            $table->string('no_hp')->nullable()->change();;
            $table->string('whatsapp')->nullable()->change();;
            $table->string('email')->nullable()->change();;
            $table->string('opening_hours_weekday')->nullable()->change();;
            $table->string('opening_hours_weekend')->nullable()->change();;
            $table->string('instagram')->nullable()->change();;
            $table->string('facebook')->nullable()->change();;
            $table->string('tiktok')->nullable()->change();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Setting', function (Blueprint $table) {
            //
        });
    }
};
