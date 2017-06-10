<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventKmWaypointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventkmwaypoints', function (Blueprint $table) {
            $table->increments('eventwp_id')->primary;
            $table->integer('eventkm_id');
            $table->integer('predecessor');
            $table->string('long');
            $table->string('lat');

            $table->foreign('eventkm_id')->references('eventkm_id')->on('events');
            $table->foreign('predecessor')->references('eventwp_id')->on('eventkmwaypoints');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_km_waypoints');
    }
}
