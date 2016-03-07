<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_movie', function (Blueprint $table) {            
            $table->integer('collection_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->timestamps();
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            $table->primary(['collection_id', 'movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('list_movie');
    }
}
