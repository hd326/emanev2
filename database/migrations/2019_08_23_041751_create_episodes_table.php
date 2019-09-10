<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('anime_id'); // belongs to an anime
            $table->string('name');
            $table->string('slug');
            $table->date('air_date');
            $table->text('sypnosis');
            $table->unsignedBigInteger('image_id');
            $table->timestamps();

            //$table->foreign('image_id')->references('id')->on('episode_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
