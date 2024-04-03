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
        Schema::create('adress_locations', function (Blueprint $table) {
            $table->id();
            $table->string("phone_number");
            $table->string("email_adress")->nullable();
            $table->string("adress_location");
            $table->string("facebook_link")->nullable();
            $table->string("twitter_link")->nullable();
            $table->string("youtube_link")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adress_locations');
    }
};
