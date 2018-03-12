<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgAgainstReferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('imgAgainstReference', function (Blueprint $table) {
            $table->increments('id');
            $table->string('src');
            $table->integer('id_againstReference')->unsigned();
            $table->timestamps();
        });
        Schema::table('imgAgainstReference', function($table) {
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
        Schema::dropIfExists('imgAgainstReference');
    }
}
