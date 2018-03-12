<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceTeeths extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referenceTeeths', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_reference')->unsigned()->index();
            $table->integer('id_teeth')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('referenceTeeths', function($table) {
            $table->foreign('id_reference')->references('id')->on('reference');
        });
        Schema::table('referenceTeeths', function($table) {
            $table->foreign('id_teeth')->references('id')->on('teeths');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ReferenceTeeths');
    }
}
