<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Collection;

class CollectionMovieTableSeeder extends Seeder
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
        $collections = Collection::lists('id')->all();
        $limit = 20;
        for($i = 0; $i < $limit; $i++) {
        	DB::table('collection_movie')->insert([
        		'collection_id' => $faker->randomElement($collections),
        		'movie_id' => $faker->randomElement($movies)        		
        	]);
        }    
    }
}
