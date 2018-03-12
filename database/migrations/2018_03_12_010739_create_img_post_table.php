<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        Schema::create('imgPost', function (Blueprint $table) {
            $table->increments('id');
            $table->string('src');
            $table->integer('id_post')->unsigned();
            $table->timestamps();
        });
        Schema::table('imgPost', function($table) {
            $table->foreign('id_post')->references('id')->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imgPost');
    }
}
