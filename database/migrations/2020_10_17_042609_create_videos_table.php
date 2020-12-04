<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('meta_keywords');
            $table->string('meta_description');
            $table->text('description');
            $table->string('youtube');
            $table->boolean('published')->default(1);
            $table->integer('user_id')->unsigned();
            $table->integer('cat_id')->unsigned();
            $table->string('image');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video');
    }
}
