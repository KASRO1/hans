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
            $table->string("onlyfans_vip")->nullable();
            $table->string("onlyfans_free")->nullable();
            $table->string("fansly")->nullable();
            $table->string("instagram")->nullable();
            $table->string("twitter")->nullable();
            $table->timestamps();
        });

        DB::table('settings')->insert([
            'onlyfans_vip' => 'https://onlyfans.com/vip',
            'onlyfans_free' => 'https://onlyfans.com/free',
            'fansly' => 'https://fansly.com',
            'instagram' => 'https://instagram.com',
            'twitter' => 'https://twitter.com',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
