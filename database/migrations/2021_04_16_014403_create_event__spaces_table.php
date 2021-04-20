<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_spaces', function (Blueprint $table) {
            $table->id();
            $table->string('venue')->nullable();
            $table->string('size')->nullable();
            $table->string('capacity')->nullable();
            $table->string('banquet')->nullable();
            $table->string('classroom')->nullable();
            $table->string('theater')->nullable();
            $table->string('cocktail')->nullable();
            $table->string('daily_rates')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('hotel_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_spaces');
    }
}
