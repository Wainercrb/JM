<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgainstReference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('againstReference', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_reference')->unsigned();
            $table->string('dentalOrgan');
            $table->string('pulparDiagnosis');
            $table->string('periapicalDiagnosis');
            $table->string('forecast'); 
            $table->string('startTreatment'); 
            $table->string('endTreatment'); 
            $table->string('recommendation');
            $table->string('provisionalMaterial');
            $table->string('observations');
            $table->timestamps();
        });
        Schema::table('againstReference', function($table) {
            $table->foreign('id_reference')->references('id')->on('reference');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('againstReference');
    }
}
