<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('beneficiary', function (Blueprint $table) {
            $table->increments('bene_id')->primary();
            $table->string('name');
            $table->string('about');
            $table->string('email');
            $table->integer('aoi_id')->unsigned();

            $table->foreign('aoi_id')
                ->references('aoi_id')->on('areaofinterest')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beneficiary');
    }
}
