<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Genre;

class MovieGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $movies = Movie::lists('id')->all();
        $genres = Genre::lists('id')->all();
        $limit = 20;
        for($i = 0; $i < $limit; $i++) {
        	DB::table('movie_genre')->insert([
        		'movie_id' => $faker->randomElement($movies),
        		'genre_id' => $faker->randomElement($genres)        		
        	]);
        }
    }
}
