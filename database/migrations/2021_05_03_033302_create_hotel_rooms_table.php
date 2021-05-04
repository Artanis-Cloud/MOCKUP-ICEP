<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_type')->nullable();
            $table->string('size')->nullable();
            $table->string('type_of_bed')->nullable();
            $table->string('view')->nullable();
            $table->string('single_rate')->nullable();
            $table->string('double_rate')->nullable();
            $table->string('corporate_rate')->nullable();
            $table->string('benefits')->nullable();
            $table->string('pictures')->nullable();
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
        Schema::dropIfExists('hotel_rooms');
    }
}
