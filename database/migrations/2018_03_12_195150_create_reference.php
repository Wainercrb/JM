<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date')->useCurrent();
            $table->string('patient');
            $table->string('identificationCard')->unique();
            $table->datetime('birthDate');
            $table->string('phone');
            $table->integer('id_user')->unsigned();
            $table->string('referredAnalgesic');
            $table->string('referredAntibioticesic');
            $table->string('observations');
            $table->timestamps();
        });
        Schema::table('reference', function($table) {
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reference');
    }
}
