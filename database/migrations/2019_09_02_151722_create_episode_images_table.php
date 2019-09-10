<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode_images', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('src');
            $table->string('mime_type')->nullable();
            $table->string('title')->nullable();
            $table->string('alt')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();

            //$table->foreign('episode_id')->references('id')->on('episodes');
            //$table->foreign('anime_id')->references('id')->on('animes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode_images');
    }
}
