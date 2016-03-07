<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imdbId')->unique();
            $table->string('title');
            $table->smallInteger('year');
            $table->char('rated', 4);
            $table->date('released');
            $table->string('runtime');
            $table->string('director');
            $table->text('actors');
            $table->text('plot');
            $table->string('poster');
            $table->decimal('imdbRating',2,1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}
