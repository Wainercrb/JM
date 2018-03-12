<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceDentalState extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('referenceDentalState', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_reference')->unsigned()->index();
            $table->integer('id_dentalState')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('referenceDentalState', function($table) {
            $table->foreign('id_reference')->references('id')->on('reference');
        });
        Schema::table('referenceDentalState', function($table) {
            $table->foreign('id_dentalState')->references('id')->on('dentalState');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referenceDentalState');
    }
}
