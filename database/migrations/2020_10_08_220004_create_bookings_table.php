<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('pick_up_address')->nullable();
            $table->String('name')->nullable();
            $table->String('phone')->nullable();
            $table->bigInteger('date')->nullable();
            $table->bigInteger('time')->nullable();
            $table->integer('labours')->nullable();
            $table->integer('vehicle_id');
            $table->String('drop_of_address')->nullable();
            $table->String('drop_of_name')->nullable();
            $table->String('drop_of_phone')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
