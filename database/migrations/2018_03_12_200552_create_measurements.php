<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
                $table->string('conduit');
                $table->string('measuring');
                $table->string('reference');
                $table->string('lima');
                $table->integer('id_againstReference')->unsigned();
                $table->timestamps();
            });
            Schema::table('measurements', function($table) {
                $table->foreign('id_againstReference')->references('id')->on('againstReference');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measurements');
    }
}
