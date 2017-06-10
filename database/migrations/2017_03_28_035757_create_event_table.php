<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id')->primary();
            $table->string('name')->unique();
            $table->string('description','500');
            $table->string('organizer');
            $table->date('gunStart_date');
            $table->dateTime('registration_deadline');
            $table->timestamps();
            $table->boolean('flag');

            $table->foreign('organizer')->references('email')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

