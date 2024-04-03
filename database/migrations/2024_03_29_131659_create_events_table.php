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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('poster_url');
            $table->string('title');
            $table->dateTime('date_event');
            $table->string('from_hour');
            $table->string('to_hour');
            $table->text('location_event');
            $table->text('description_event');
            $table->integer('is_published');
            $table->integer('created_by');
            $table->integer('deleted_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
